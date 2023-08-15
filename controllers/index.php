<?php

namespace Rhymix\Modules\Alimtalk\Controllers;

use Rhymix\Modules\Alimtalk\Base;

/**
 * 카카오 알림톡 모듈
 * 
 * Copyright (c) Waterticket
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class Index extends Base
{
	/**
	 * 초기화
	 */
	public function init()
	{
		// 스킨 또는 뷰 경로 지정
		$this->setTemplatePath($this->module_path . 'skins/' . ($this->module_info->skin ?: 'default'));
	}
	
	/**
	 * 메인 화면 예제
	 */
	public function dispAlimtalkIndex()
	{
		// 뷰 파일명 지정
		$this->setTemplateFile('index');
	}
}
