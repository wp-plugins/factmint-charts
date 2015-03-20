=== Factmint Charts ===
Contributors: chrismichaelscott
Tags: data visualization,charts,factmint,pie chart,line chart,area chart,doughnut chart,bubble chart,scatter chart
Requires at least: 4.1.1
Tested up to: 4.1.1
License: MIT
License URI: http://opensource.org/licenses/MIT

Build data visualizations in Wordpress. Use Factmint Charts to render a CSV table of data as a pie chart, line chart, scatter graph, etc...

== Description ==
Factmint Charts is used to progressively enhance HTML tables into interactive SVG data visualizations. This plugin provides shortcodes for creating those charts. Current charts available are:

- Pie Chart = [factmint-pie]
- Doughnut Chart = [factmint-doughnut]
- Line Chart = [factmint-line]
- Stacked Area Chart = [factmint-stacked-area]
- Candlestick Chart = [factmint-candlestick]
- Scatter Graph = [factmint-scatter]
- Bubble Chart = [factmint-bubble]
- Bar (or column) Chart = [factmint-column-bar]

Full documentation for the charts can be found at http://factmint.com/charts/

IMPORTANT: you need to register your domain at http://charts.factmint.com (log in required) for charts to render.
IMPORTANT: Factmint Charts will add a small "Powered by Factmint" link below each chart.

Example usage:

[factmint-pie]
Country, Population
UK, 70000000
France, 90000000
Germant, 120000000
[/factmint-pie]

== Installation ==
1) Install and activate the plugin
2) Go to http://charts.factmint.com (log in required) and register your domain

Factmint Charts are free to use for non-commercial entities and commercial licences are available (see http://factmint.com/charts/).

== Frequently Asked Questions ==
I can see an HTML table but no Pie/Line/Scatter/etc:
-> You need to register your domain at http://charts.factmint.com (a link should be provided in the JS console when you view the post/page)

How do I pass options into the Charts?
-> All of the options available to Factmint Charts (see http://factmint.com/documentation/) are available and can be passed in as shortcode arguments (without the \"data-fm-\" prefix). For example: [factmint-line smooth-curve=\"true\"] ....

== Screenshots ==
1. Using a shortcode
2. A rendered Chart
