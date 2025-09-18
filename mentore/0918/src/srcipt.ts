// Pagrindiniai tipai:
 
// String:
let vardas: string = 'Jonas';
console.log('vardas')
// vardas = 5; // neleidžia skaičiaus nes automatiškai priskyrė tipą String
 
let pavarde: string;
pavarde = 'Petraitis' // leidžia nes automatiškai priskyrė tipą any
// pavarde = 5 // leidžia nes automatiškai priskyrė tipą any
 
let miestas: string;
miestas = 'Vilnius'; // leidžia nes priskirtas tipas string
// miestas = 5; // neleidžia nes priskirtas tipas string
 
// Number:
let amzius: number;
 
// Boolean:
let studentas: boolean;
 
// Masyvai ir sąrašai:
let skaiciai: number[] = [1, 5, 4];
// skaiciai.push('labas');

let raides: string[] = ['vienas', 'du', 'penki'];
 
let zodziai: Array<string | number | boolean | undefined | null> = ['vienas', 2, 'trys', true, undefined, null];
 
// Objektai:
let vartotojas: { vardas: string; amzius: number } = {
    vardas: 'Jonas',
    amzius: 24
}
 
// vartotojas.
// vartotojas.amzius = '5' // neleis pakeisti savybės tipo
 
// Any
let vairuotojas: { vardas: string; amzius: number; turiVP: any } = {
    vardas: 'Jonas',
    amzius: 24,
    turiVP: undefined // gali buti bet kuris tipas
}
 
// jeigu visas objektas any, nerodo jo savybių
let vairuotojasAntras: any = {
    vardas: 'Jonas',
    amzius: 24,
    turiVP: undefined // gali buti bet kuris tipas
}
 
// Union tipas
let id: string | number;
id = '123';
id = 123;
 
// Funkcijos
 
function sudeti(a: number, b: number): number {
    return a + b;
}
 
let demuo = 4;
let suma = sudeti(demuo, 5);
 
function pasisveikinti(vardas: string): void {
    console.log('Sveikas ' + vardas);
}
 
let pasisveikinimas = pasisveikinti('Jonas');
 
// void – tai tipas TypeScript(ir daugelyje kitų programavimo kalbų), kuris reiškia, kad funkcija negrąžina jokios reikšmės.
// Funkcija pasisveikinti() tik atlieka veiksmą(spausdina tekstą į konsolę), bet negrąžina jokios reikšmės
 
console.log('Veikia');
 
// Sąsajos (Interfaces) - apibrėžia duomenų struktūrą
 
interface Studentas {
    id?: number, // neprivaloma savybe
    vardas: string | null;
    amzius: number;
    aktyvus: boolean;
}
 
interface KitasStudentas {
    paskaitaLankantys: Studentas[];
}

let jonas: Studentas = {
    vardas: 'Jonas',
    amzius: 24,
    aktyvus: true
}
 
let aiste: Studentas = {
    id: 123,
    vardas: 'Aiste',
    amzius: 22,
    aktyvus: false
}
 
 
// Klasės
 
class Automobilis {
    marke: string;
    metai: number;
 
    constructor(marke: string, metai: number) {
        this.marke = marke;
        this.metai = metai;
    }
 
    rodytiInfo(): void {
        console.log(`${this.marke}, pagamintas ${this.metai}`)
    }
 
    apskaiciuotiMetus(): number {
        return this.metai * 2
    }
 
    parodytiIrApskaiciuotiMetus(): number {
        console.log(this.metai);
        return this.metai * 2
    }
}
 
let audi = new Automobilis('audi', 1980);
 
audi.parodytiIrApskaiciuotiMetus();
 
// Generics - leidžia kurti universalų kodą
 
function apversti<T>(elementai: T[]): T[] {
    return elementai.reverse();
}
 
let skaiciaiApvertimui = apversti([1, 2, 3]);
let raidesApvertimui = apversti(['vienas', 'du', 'trys']);
 
// skaiciaiApvertimui.push('keturi') // neleidžia pridėti kitokio tipo elemento
 
// su Any vietoje generic, prarandame tipų saugumą
function apversti1(elementai: any[]): any[] {
    return elementai.reverse();
}
 
let skaiciaiApvertimui1 = apversti1([1, 2, 3]);
let raidesApvertimui1 = apversti1(['vienas', 'du', 'trys']);
 
skaiciaiApvertimui1.push('keturi'); // leidžia pridėti stringą į number masyvą
 
// Generic su daugiau negu vienu tipu
 
function pora<A, B>(pirmas: A, antras: B): [A, B] {
    return [pirmas, antras]
}
 
let p1 = pora<string, number>('Jonas', 24);
let p2 = pora<boolean, string>(true, 'labas');
let p3 = pora<number, string[]>(12, ['labas']);
 
// Generic sąsajose (Interface)
 
interface Sandelis<T> {
    prekes: T[];
    prideti(preke: T): void
}
 
let knyguSandelis: Sandelis<string> = {
    prekes: [],
    prideti(preke: string) {
        this.prekes.push(preke)
    },
}
 
knyguSandelis.prideti('Virimo vadovas');
 
let knyguSandelis1: Sandelis<number> = {
    prekes: [],
    prideti(preke: number) {
        this.prekes.push(preke)
    },
}
 
knyguSandelis1.prideti(123);
 
// Generic klasėse
class Deze<T> {
    turinys: T;
    constructor(t: T) {
        this.turinys = t
    }
 
    gauti(): T {
        return this.turinys
    }
}
 
let skaiciuDeze = new Deze<number>(123);
console.log(skaiciuDeze.gauti()); // 123
 
let zodzioDeze = new Deze<string>('du');
console.log(zodzioDeze.gauti()); // du
 
// Generics su apribojimais (extends) galime apriboti kokie tipai leidžiami
 
function parodytiIlgi<T extends { length: number }>(elementas: T): void {
    console.log(`Ilgis: ${elementas.length}`);
}
 
parodytiIlgi('Sveiki');
//parodytiIlgi(123); // rodo klaidą, nes duomenų tipas number neturi .length savybės

// 1. Pagrindiniai tipai
// Užduotis:
// Sukurkite tris kintamuosius:
// vardas – tipas string,
// amzius – tipas number,
// studentas – tipas boolean.
// Priskirkite jiems reikšmes ir išveskite į konsolę.
 
// 2. Union tipas
// Užduotis:
// Sukurkite kintamąjį id, kuris galėtų būti string arba number.
// Priskirkite jam skaičių, tada tekstą.
 
// 3. Masyvas su keliais tipais
// Užduotis:
// Sukurkite masyvą duomenys, kuris gali turėti string, number ir boolean reikšmes.
// Pridėkite kelis elementus ir išveskite į konsolę.
 
// 4. Objektas su tipais
// Užduotis:
// Sukurkite objektą vartotojas, kuris turėtų savybes:
// vardas(string),
// amzius(number),
// aktyvus(boolean).
 
// 5. Funkcija su grąžinamu tipu
// Užduotis:
// Sukurkite funkciją sudeti, kuri priima du number tipus ir grąžina jų sumą.
 
// 6. Sąsaja(Interface)
// Užduotis:
// Sukurkite sąsają Studentas su savybėmis:
// vardas(string),
// amzius(number),
// aktyvus(boolean).
// Sukurkite kintamąjį jonas, kuris atitinka šią sąsają.
 
// 7. Klasė su metodu
// Užduotis:
// Sukurkite klasę Automobilis, turinčią:
// savybes marke(string) ir metai(number),
// metodą rodytiInfo(), kuris išveda tekstą: "Audi, pagamintas 2010".
 
// 8. Generics funkcijoje
// Užduotis:
// Sukurkite generinę funkciją apversti, kuri priima masyvą ir grąžina jį apverstą.
 
// 9. Generic sąsajoje
// Užduotis:
// Sukurkite sąsają Sandelis<T>, kuri turi:
// masyvą prekes(T[]),
// metodą prideti(preke: T): void.
// Sukurkite knygų sandėlį(string tipo).
 
// 10. Generics su apribojimu
// Užduotis:
// Sukurkite funkciją rodytiIlgi, kuri gali priimti tik tipus, turinčius savybę.length.
 

