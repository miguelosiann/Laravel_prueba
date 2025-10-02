<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    public $alertClass;
    public $type;
    public $title;
    public $message;

    public function __construct($type = 'info', $title = '', $message = '')
    {
        $this->type = $type;
        $this->title = $title;
        $this->message = $message;

        switch ($type) {
            case 'info':
                $this->alertClass = 'text-blue-800 border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800';
                break;
            case 'danger':
                $this->alertClass = 'text-red-800 border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800';
                break;
            case 'warning':
                $this->alertClass = 'text-yellow-800 border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400 dark:border-yellow-800';
                break;
            case 'success':
                $this->alertClass = 'text-green-800 border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800';
                break;
            case 'dark':
                $this->alertClass = 'text-gray-800 border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-800';
                break;
            default:
                $this->alertClass = 'text-blue-800 border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800';
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
