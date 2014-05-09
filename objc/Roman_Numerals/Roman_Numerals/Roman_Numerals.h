//
//  Roman_Numerals.h
//  Roman_Numerals
//
//  Created by Jens Jakob Jensen on 09/05/14.
//  Copyright (c) 2014 Jayway. All rights reserved.
//

@import Foundation;


@interface Roman_Numerals : NSObject

- (NSString *)decimalToRoman:(NSInteger)decimal;

- (NSInteger)romanToDecimal:(NSString *)roman;

@end
