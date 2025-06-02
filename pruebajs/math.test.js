const { sumar, esPar } =require('./math');

test('suma 2+3 debe ser 5',()=>{expect(sumar(2,3)).toBe(8);});
test('el numero 4 es par',()=>{expect(esPar(4)).toBe(true);});