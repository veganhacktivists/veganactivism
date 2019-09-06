<?php

namespace App\Domain;

class StaticOrganization implements OrganizationInterface
{
    public $id;

    public $image_url;

    public $title;

    public $card_content;

    public $slug;

    public $website;

    public $about;

    public $activism;

    public $involvement;

    public function __construct($id, $image_url, $title, $card_content, $slug, $website)
    {
        $this->id = $id;

        $this->image_url = $image_url;

        $this->title = $title;

        $this->card_content = $card_content;

        $this->slug = $slug;

        $this->website = $website;
    }

    public function cardAttributes()
    {
        return [
            'id' => $this->id,
            'image_url' => $this->image_url,
            'title' => $this->title,
            'card_content' => $this->card_content,
            'slug' => $this->slug,
            'website' => $this->website,
        ];
    }

    public function detailAttributes()
    {
        return [
            'id' => $this->id,
            'image_url' => $this->image_url,
            'title' => $this->title,
            'slug' => $this->slug,
            'about' => $this->$about,
            'activism' => $this->activism,
            'involvement' => $this->involvement,
        ];
    }
}
