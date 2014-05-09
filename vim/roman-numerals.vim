

function! DecimalToRoman(num)
  let one = ['', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX']
  let ten = ['', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC']
  let hundred = ['', 'C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM']
  let thousand = ['', 'M', 'MM', 'MMM']
  return thousand[a:num/1000] . hundred[(a:num/100)%10] . ten[(a:num/10)%10] . one[a:num%10]
endfunction

function! WordUnderCursorToRoman()
    let wordUnderCursor = expand("<cword>")
    let roman = DecimalToRoman(wordUnderCursor)
    normal diw
    put = roman
endfunction

