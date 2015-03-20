<?php
/**
 * Plugin Name: Factmint Charts
 * Plugin URI: http://factmint.com/blog/create-a-chart-in-wordpress
 * Description: A shortcode for publishing Factmint Charts
 * Version: 0.0.3
 * Author: chris.scott@factmint.com
 * License: MIT
 */

defined( 'ABSPATH' ) or die();

function csv_to_data($csv) {
	$table = Array();

	$cleanCsv = strip_tags($csv);
	$rows = explode("\n", $cleanCsv);

	foreach ($rows as $row) {
		if ($row != "") {
			array_push($table, explode(",", $row));
		}
	}

	return $table;
}

function generate_html_table($table, $chartName, $options) {
	$html = "<table class=\"fm-$chartName\"";

	foreach ($options as $key => $value) {
		$html .= " data-fm-$key=\"$value\"";
	}

	$html .= ">\n";

	$html .= "<thead><tr>\n";

	$headerRow = array_shift($table);
	foreach ($headerRow as $cell) {
		$html .= "<th>" . preg_replace("/^[^(\x20-\x7F)]*/", "", $cell) . "</th>\n";
	}

	$html .= "</tr></thead>\n";

	$html .= "<tbody>\n";

	foreach ($table as $row) {
		$html .= "<tr>\n";
		foreach ($row as $cell) {
			$html .= "<td>" . preg_replace("/^[^(\x20-\x7F)]*/", "", $cell) . "</td>\n";
		}
		$html .= "</tr>\n";
	}

	$html .= "</tbody>\n";

	$html .= "</table>\n";

	return $html;
}

function factmintchart_func($attributes, $content, $name){
	$name = str_replace("factmint-", "", $name);

	$table = csv_to_data($content);

	wp_enqueue_style("factmint-$name-style", "http://factmint.io/$name.css");

	echo generate_html_table($table, $name, $attributes);

	wp_enqueue_script("factmint-$name-renderer", "http://factmint.io/$name.js");
}
add_shortcode( 'factmint-pie', 'factmintchart_func' );
add_shortcode( 'factmint-doughnut', 'factmintchart_func' );
add_shortcode( 'factmint-line', 'factmintchart_func' );
add_shortcode( 'factmint-stacked-area', 'factmintchart_func' );
add_shortcode( 'factmint-candlestick', 'factmintchart_func' );
add_shortcode( 'factmint-scatter', 'factmintchart_func' );
add_shortcode( 'factmint-bubble', 'factmintchart_func' );
add_shortcode( 'factmint-pictorial', 'factmintchart_func' );
add_shortcode( 'factmint-column-bar', 'factmintchart_func' );
?>
