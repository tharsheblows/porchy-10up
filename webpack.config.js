const defaultConfig = require("@10up/scripts/config/webpack.config");
module.exports = {
	...defaultConfig,
	module: {
		...defaultConfig.module,
		rules: [
			...defaultConfig.module.rules,
			{
				test: /\.(ttf|otf)$/,
				use: {
					loader: "url-loader",
				},
			},
		],
	},
};
