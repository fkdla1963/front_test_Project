import {
    conHello,
    fnPlusNum
} from './libary_named.js';
console.log(conHello, '이름으로 내보내기 입니다.');
console.log('1+2', fnPlusNum(1, 2));

import * as myLibary from './libary_named.js';
console.log(conHello, '*을 사용한 이름으로 내보내기 입니다.');
console.log('3+4 = ', myLibary.fnPlusNum(3, 4));

import fnMyfunction from './libary_default.js';
console.log('안녕하세요! 기본으로 내보내기입니다.');
console.log('5+6 =', fnMyfunction(5, 6));