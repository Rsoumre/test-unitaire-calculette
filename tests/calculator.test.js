const {calculate} = require('../calculator');

test('addition', () => {
    expect(calculate('2 + 3')).toBe(5);
});

test('subtraction', () => {
    expect(calculate('5 - 2')).toBe(3);
});

test('multiplication', () => {
    expect(calculate('4 * 3')).toBe(12);
});

test('priorité des opérations', () => {
    expect(calculate('2 + 3 * 4')).toBe(14);
});

test('parenthèses', () => {
    expect(calculate('(2 + 3) * 4')).toBe(20);
});

