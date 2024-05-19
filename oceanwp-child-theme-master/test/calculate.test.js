const calculate = require('../test/calculator');

describe('test calculate', () => {
  // Testez la fonction calculate avec l'opérateur '+'
  test('1 + 2 = 3', () => {
    expect(calculate(1, 2, '+')).toBe(3);
  });

  // Testez la fonction calculate avec l'opérateur '-'
  test('3 - 2 = 1', () => {
    expect(calculate(3, 2, '-')).toBe(1);
  });

  // Testez la fonction calculate avec l'opérateur '*'
  test('2 * 3 = 6', () => {
    expect(calculate(2, 3, '*')).toBe(6);
  });

  // Testez la fonction calculate avec l'opérateur '/'
  test('6 / 2 = 3', () => {
    expect(calculate(6, 2, '/')).toBe(3);
  });

  // Testez la fonction calculate avec un opérateur invalide
  test('Opérateur invalide', () => {
    expect(() => calculate(1, 2, '&')).toThrow("Invalid operator");
  });
});



