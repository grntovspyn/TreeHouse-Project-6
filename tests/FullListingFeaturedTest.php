<?php

use PHPUnit\Framework\TestCase;

class FullListingFeaturedTest extends TestCase
{
    protected $listing;

    public function setUp(): void
    {
        $data = [
            'id' => 1,
            'title' => 'New Posting',
            'website' => 'http://www.website.com',
            'email' => 'user@email.com',
            'twitter' => '@newuser',
            'image' => 'path_to_image/image.jpg',
            'coc' => 'Code of Conduct'
        ];

        $this->listing = new ListingFeatured($data);
    }

    public function testGetStatus()
    {
        $this->assertEquals('featured',$this->listing->getStatus());
    }

    public function testGetCoc()
    {
        $this->assertEquals('Code of Conduct',$this->listing->getCoc());
    }
}