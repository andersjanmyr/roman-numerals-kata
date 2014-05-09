//
//  Roman_Numerals_Tests.m
//  Roman_Numerals Tests
//
//  Created by Jens Jakob Jensen on 09/05/14.
//  Copyright (c) 2014 Jayway. All rights reserved.
//

@import XCTest;

#include "Roman_Numerals.h"


@interface Roman_Numerals_Tests : XCTestCase

@property (nonatomic) Roman_Numerals *conv;

@end


@implementation Roman_Numerals_Tests

- (void)setUp
{
    [super setUp];
    // Put setup code here. This method is called before the invocation of each test method in the class.
    self.conv = [Roman_Numerals new];
}

- (void)tearDown
{
    // Put teardown code here. This method is called after the invocation of each test method in the class.
    [super tearDown];
}

- (void)testExample
{
    XCTAssertEqual([self.conv decimalToRoman:1], @"1", @"1 should be converted to 'I'");
}

@end
