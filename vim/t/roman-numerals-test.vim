source roman-numerals.vim

describe 'DecimalToRoman'
  it 'returns I for 1'
    Expect DecimalToRoman(1) == 'I'
  end

  it 'returns II for 2'
    Expect DecimalToRoman(2) == 'II'
  end
end


describe 'WordUnderCursorToRoman'
  before
    new
    put! = '3994'
  end

  after
    close!
  end

  it 'converts the word under cursor to roman'
    normal gg
    call WordUnderCursorToRoman()
    Expect expand("<cword>") == 'MMMCMXCIV'
end
