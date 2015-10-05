<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class GifForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('gif_selector', 'select')
            ->add('charSelector', 'select')
            ->add('techSelector', 'select')
            ->add('url', 'text')
            ->add('description', 'text')
            ->add('source', 'text');
    }
}