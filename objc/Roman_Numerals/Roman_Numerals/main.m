//
//  main.m
//  Roman_Numerals
//
//  Created by Jens Jakob Jensen on 09/05/14.
//  Copyright (c) 2014 Jayway. All rights reserved.
//

@import Foundation;

#import "Roman_Numerals.h"


int main(int argc, const char * argv[])
{

    @autoreleasepool {
        
        if (argc != 1) {
            [NSException raise:NSInvalidArgumentException format:@"Need a decimal number to convert to roman!"];
        }
        
        NSInteger decimal = atoi(argv[1]);
        NSLog(@"%@", [[Roman_Numerals new] decimalToRoman:decimal]);
        
    }
    return 0;
}

