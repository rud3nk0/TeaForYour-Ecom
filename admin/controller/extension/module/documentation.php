<?php
// admin/controller/extension/module/documentation.php

class ControllerExtensionModuleDocumentation extends Controller {
    public function index() {
        // Загружаем языковой файл
        $this->load->language('extension/module/documentation');
        
        // Устанавливаем заголовок страницы
        $this->document->setTitle($this->language->get('heading_title'));

        // Загружаем шаблон документации
        $data['content'] = $this->language->get('documentation_content');
        
        // Отправляем вывод шаблона
        $this->response->setOutput($this->load->view('extension/module/documentation', $data));
    }
}