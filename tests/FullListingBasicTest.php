<?php

use PHPUnit\Framework\TestCase;

class FullListingBasicTest extends TestCase
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
        ];

        $this->listing = new ListingBasic($data);
    }


    public function testEnsureObjectIsCreatedWhenPassingMinData()
    {   
        $this->assertInstanceOf(ListingBasic::class, $this->listing);
    }

    public function testEnsureGetStatusMethodWorks() 
    {   
        $this->assertEquals('basic',$this->listing->getStatus());
    }

    public function testGetId()
    {
        $this->assertEquals($this->listing->getId(),1);
    }

    public function testGetTitle()
    {
        $this->assertEquals($this->listing->getTitle(),'New Posting');
    }

    public function testGetMethodsAreReturningExpectedResults()
    {
        $this->assertEquals($this->listing->getId(),1);
        $this->assertEquals($this->listing->getTitle(),'New Posting');
        $this->assertEquals($this->listing->getWebsite(),'http://www.website.com');
        $this->assertEquals($this->listing->getEmail(),'user@email.com');
        $this->assertEquals($this->listing->getTwitter(),'newuser');
       
    }

    public function testMethodConvertingItemsToArray()
    {
        $this->assertIsArray($this->listing->toArray());
    }





}