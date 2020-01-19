<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{

    public function testException()
    {   
        
        $this->expectException(Exception::class);
        $listing = new ListingBasic();

    }

    public function testMustBeCreatedWithValidId()
    {
        $data = [
            "id" => null,
            "title" => "New Posting",
        ];

        $this->expectExceptionMessage("Unable to create a listing, invalid id");
        $listing = new ListingBasic($data);

    }

    public function testMustBeCreatedWithValidTitle()
    {
        $data = [
            "id" => 1,
            "title" => null,
        ];
        $this->expectExceptionMessage("Unable to create a listing, invalid title");
        $listing = new ListingBasic($data);

    }

}