<?php

namespace MeeeetDev\LaravelPdf;

use File;
use View;

class PdfWrapper {

	/**
	 * Load a HTML string
	 *
	 * @param string $html
	 * @return Pdf
	 */
	public function loadHTML($html, $config = [], $mergeConfig = true)
	{
		return new Pdf($html, $config, $mergeConfig);
	}

	/**
	 * Load a HTML file
	 *
	 * @param string $file
	 * @return Pdf
	 */
	public function loadFile($file, $config = [], $mergeConfig = true)
	{
		return new Pdf(File::get($file), $config, $mergeConfig);
	}

	/**
	 * Load a View and convert to HTML
	 *
	 * @param string $view
	 * @param array $data
	 * @param array $mergeData
	 * @return Pdf
	 */
	public function loadView($view, $data = [], $mergeData = [], $config = [], $mergeConfig = true)
	{
		return new Pdf(View::make($view, $data, $mergeData)->render(), $config, $mergeConfig);
	}

}
