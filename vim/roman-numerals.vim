
function! DecimalToRoman(...)
  return 'I'
endfunction

function WordUnderCursorToRoman()
    let wordUnderCursor = expand("<cword>")
    let roman = DecimalToRoman(wordUnderCursor)
    normal bdw
    put! = roman
endfunction

