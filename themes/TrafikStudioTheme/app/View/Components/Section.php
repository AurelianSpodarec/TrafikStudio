<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Section extends Component
{

    public $children;
    public $class;

    public $container = [
        'fluid'   => 'container--fluid',
        'xs'      => 'container container--xs',
        'sm'      => 'tf-container tf-container--sm',
        'default' => 'container',
        'lg'      => 'tf-container tf-container--lg'
    ];

    public $bgColor = [
        'default'   => 'section--bg-transparent',
        'primary'   => 'section--bg-primary-default',
        'secondary' => 'section--bg-secondary-default',
        'teritary'  => 'section--bg-teritary-default',
        'gray'     =>  'bg-gray-50',
    ];

    // public $gutter = [
    //     'none'    => 'gutter-none',
    //     'default' => 'gutter-md',
    //     '2xs'     => 'gutter-2xs',
    //     'xs'      => 'gutter-xs',
    //     'sm'      => 'gutter-sm',
    //     'md'      => 'gutter-md',
    //     'lg'      => 'gutter-lg',
    //     'xl'      => 'gutter-xl',
    //     '2xl'     => 'gutter-2xl',
    //     '3xl'     => 'gutter-3xl',
    //     '4xl'     => 'gutter-4xl',
    //     '5xl'     => 'gutter-5xl',
    // ];

   
 


    public function __construct(
        $bgColor = 'default',
        $container = null,
        $class = null, 
        $message = null
    ) {
        $this->bgColor = $this->bgColor[$bgColor] ?? $this->bgColor['default'];
        $this->container = $this->container[$container] ?? $this->container['default'];
 
        $this->class = $class;
        $this->message = $message;
    }


    public function render()
    {
        return $this->view('components.section');
    }
}

 