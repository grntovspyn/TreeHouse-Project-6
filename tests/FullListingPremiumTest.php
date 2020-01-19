<?php

use PHPUnit\Framework\TestCase;

class FullListingPremiumTest extends TestCase
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
            'description' => 'My new website posting',
        ];

        $this->listing = new ListingPremium($data);
    }

    public function testGetStatus()
    {
        $this->assertEquals('premium', $this->listing->getStatus());
    }

    public function testGetWebsiteDescription()
    {
        $this->assertEquals('My new website posting', $this->listing->getDescription());
    }

    public function testDisplayAllowedTags()
    {
        $this->assertSame(htmlspecialchars('<p><br><b><strong><em><u><ol><ul><li>'), $this->listing->displayAllowedTags());
    }
}