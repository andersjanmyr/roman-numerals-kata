source roman-numerals.vim

describe 'math#round_to_zero'
  it 'returns a floor for a positive number'
    Expect math#round_to_zero(1.2) == 1
    Expect math#round_to_zero(34.5) == 34
  end
end
