<?php
namespace App;

class View
    implements \Countable
{
    use BaseTrait;

    protected $data = [];

    public function render($template)
    {
        ob_start();
        foreach ($this->data as $prop => $value) {
            $$prop = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    /**
     * @param $template string Ссылка на файл шаблона
     * @param array $data
     */
    public function display($template)
    {
        echo $this->render($template);
    }

    public function count()
    {
        return count($this->data);
    }
}