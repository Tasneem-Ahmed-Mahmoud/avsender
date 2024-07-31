<?php
namespace App\Traits;

trait Slug
{
    function slugValue($value)
    {
        // Convert to lowercase
        $value = strtolower($value);
        // Remove special characters
        $value = preg_replace('/[,.=\-_\+\'"\\\}\{\:\?\/\!@#\$%\^&\*\(\)\<\>]/', '', $value);
        // Replace spaces with hyphens
        return $value = str_replace(' ', '-', $value);

    }

}
