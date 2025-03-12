// WordPress webpack config.
const defaultConfig = require("@wordpress/scripts/config/webpack.config");

// Import the helper to find and generate the entry points in the src directory
const { getWebpackEntryPoints } = require("@wordpress/scripts/utils/config");

// Plugins.
const CopyPlugin = require("copy-webpack-plugin");

const RemoveEmptyScriptsPlugin = require("webpack-remove-empty-scripts");

const RtlCssPlugin = require("rtlcss-webpack-plugin");

// Utilities.
const path = require("path");
const { globSync } = require("glob");

const ThemePath = path.resolve("./public/app/themes/base-theme");

// Pattern Custom Stylesheets.
const patternStylesheets = () => {
	return globSync(ThemePath + "/resources/css/patterns/*.css").reduce(
		(files, filepath) => {
			const name = path.parse(filepath).name;

			files[`css/patterns/${name}`] = path.resolve(
				ThemePath,
				`resources/css/patterns`,
				`${name}.css`,
			);

			return files;
		},
		{},
	);
};

// Block Custom Stylesheets.
const blockStylesheets = () => {
	return globSync(ThemePath + "/resources/css/blocks/*.css").reduce(
		(files, filepath) => {
			const name = path.parse(filepath).name;

			files[`css/blocks/${name}`] = path.resolve(
				ThemePath,
				`resources/css/blocks`,
				`${name}.css`,
			);

			return files;
		},
		{},
	);
};

module.exports = (env) => {
	return [
		{
			...defaultConfig,
			name: "Theme",
			entry: {
				...getWebpackEntryPoints,
				...blockStylesheets(),
				...patternStylesheets(),
				editor: {
					import: path.resolve(ThemePath, "resources/js/", "editor.js"),
					filename: "js/[name].js",
				},
				global: {
					import: path.resolve(ThemePath, "resources/js/", "global.js"),
					filename: "js/[name].js",
				},
				"css/global": {
					import: path.resolve(ThemePath, "resources/css/", "global.css"),
				},
			},
			output: {
				...defaultConfig.output,
				path: ThemePath + "/assets/",
			},
			plugins: [
				...defaultConfig.plugins.filter(
					(filter) => !(filter instanceof RtlCssPlugin),
				),
				new RemoveEmptyScriptsPlugin({
					stage: RemoveEmptyScriptsPlugin.STAGE_AFTER_PROCESS_PLUGINS,
				}),
				new CopyPlugin({
					patterns: [
						{
							from: ThemePath + "/resources/fonts",
							to: ThemePath + "/assets/fonts",
							noErrorOnMissing: true,
						},
						{
							from: ThemePath + "/resources/svg",
							to: ThemePath + "/assets/svg",
							noErrorOnMissing: true,
						},
					],
				}),
			],
		},
	];
};
