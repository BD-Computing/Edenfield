<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;
use App\Models\Testimonial;

class Testimonials extends Component
{
    public function render()
    {
        $testimonials = Testimonial::getTestimonials(3);
        return view('livewire.web.testimonials', compact('testimonials'));
    }
}