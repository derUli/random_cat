<?php

class RandomCat extends Controller
{

    public function render()
    {
        $cat = '<div class="random-cat">';
        $cat .= '<a href="http://thecatapi.com"><img class="responsive-image" src="http://thecatapi.com/api/images/get?format=src&type=gif"></a>';
        $cat .= '</div>';
        $cat = apply_filter($cat, 'random_cat');
        return $cat;
    }

    public function accordionLayout()
    {
        echo '<h2 class="accordion-header">' . get_translation("cat") . '</h2>
<div class="accordion-content">' . $this->render() . '</div>';
    }
}