// Clean Code užduotys(JS) — Naming, Comments, Formatting
 
// Kiekviena užduotis apima:
// - Naming (aiškūs, tikslūs pavadinimai),
// - Comments (tik vertingi komentarai, be perteklinių),
// - Formatting (vertikalus ir horizontalus),
// - Pasirinktinai skaidymą į atskirus failus(kai tikslinga).
 
// 1) Vartotojo registracija: validacija + saugojimas
function reg(u, p) {
    if (!u.includes('@') || p.length < 6) { throw new Error('bad') }
    let x = { u, p }; // create obj
    save(x) // save to db
}
 
// Užduotis:
// - Pervadinti `reg`, `u`, `p`, `x`, `save` į aiškius pavadinimus.
// - Pašalinti perteklinius komentarus, palikti trumpą prasmingą.
// - Sutvarkyti vertikalų formatavimą.
// - Pasirinktinai: Iškelti validaciją į atskirą modulį.
 
// 2) Prisijungimas: šakotas loginas su per ilga eilute
const s = em && pw ? log(em, pw) : log(getEm(), getPw()) // login user
 
// Užduotis:
// - Pervadinti `s`, `em`, `pw`, `log`, `getEm`, `getPw`.
// - Horizontalus formatavimas: nesutalpinti per daug logikos vienoje eilutėje.
// - Komentaras — tik jei paaiškina neakivaizdų aspektą.
// - Pasirinktinai: Iškelti `fetchValidatedCredentials`.
 
// 3) Produktų įterpimas: klaidinantys komentarai + pavadinimai
function add(p) { // remove user
    db.ins(p) // insert user ?
}
 
// Užduotis:
// - Pervadinti `add`, `p`, `db.ins` atspindint produktą, o ne vartotoją.
// - Pašalinti klaidinančius komentarus.
// - Vertikalus formatavimas: trumpas, aiškus blokas.
// - Pasirinktinai: `db` operacijas į atskirą modulį.
 
// 4) Užsakymo apdorojimas: mišri logika(validacija + pranešimas + DB)
function handle(o) {
    if (!o || !o.id) { throw new Error('bad') }
    sendMail(o.customerEmail)
    db.save(o); console.log('ok')
}
 
// Užduotis:
// - Pervadinti `handle`, `o` ir`db.save`.
// - Atskirt vertikaliai: validacija / pranešimas / persiuntimas.
// - Komentaras tik prie neakivaizdaus(pvz., „siunčiamas async pranešimas“).
// - Pasirinktinai: Skaldymas į`validateOrder`, `notifyCustomer`, `persistOrder`.
 
// 5) Paieška: netikslūs tipai / pavadinimai + užkomentuotas kodas
function find(d) { // find item
    // const old = cache.get(d)
    // return old
    return repo.search(d)
}
 
// Užduotis:
// - Pervadinti`find`, `d`, `repo.search` į prasmingus.
// - Pašalinti mirusį(užkomentuotą) kodą arba paaiškinti jo paskirtį(jei laikina).
// - Horizontalus: kiekviena eilutė — vienas veiksmas.
 
// 6) Sesijos kūrimas: per daug bendriniai vardai + trūksta tarpų
function make(u) { if (!u) { throw Error('!') } const s = create(u); db.sv(s) }
 
// Užduotis:
// - Pervadinti`make`, `u`, `create`, `db.sv`.
// - Vertikalus formatas: aiškūs blokai.
// - Komentaras: tik „kodėl“, ne „ką“.
 
// 7) Kainos apskaičiavimas: per ilgi pavadinimai + prasta eilutės struktūra
const priceAfterApplyingMandatoryCustomerSeasonalDiscountAndVat = calc(p, disc, vat); console.log(priceAfterApplyingMandatoryCustomerSeasonalDiscountAndVat)
 
// Užduotis:
// - Sutrumpinti, bet nepamesti prasmės.
// - Išskaidyti horizontaliai (kelios aiškios eilutės).
// - Komentaras tik kai taisyklė neakivaizdi.
 
// 8) Filtravimas: loginė sąlyga vienoje eilutėje + migloti vardai
function f(a) { return a && a.length ? a.filter(x => x > 0) : [] }
 
// Užduotis:
// - Pervadinti`f`, `a`, `x`.
// - Išskaidyti horizontaliai ir vertikaliai.
// - Komentaras: kada grąžinama tuščia aibė.
 
// 9) Įkėlimo tvarkyklė: klaidinantis komentaras + mišri atsakomybė
function upload(file) { // delete file
    if (!file) throw Error('no file'); store(file); notify('ok')
}
 
// Užduotis:
// - Pervadinti`upload`, `store`, `notify`.
// - Pašalinti klaidinantį komentarą („delete file“).
// - Atskirt vertikaliai: validacija / įkėlimas / pranešimas.
 
// 10) Skaidymas į failus: autentifikacija(stepdown + import/export)
function auth(e, p) { if (!e || !p) throw Error('!'); if (login(e, p)) { return tkn() } return null }
 
// Užduotis:
// - Pervadinti`auth`, `e`, `p`, `login`, `tkn`.
// - Stepdown: aukščiau — orkestruojanti funkcija, žemiau — pagalbinės.
// - Pasirinktinai: Išskaidyti į modulius `authService`, `validators`, `token`.
 
// Greitas kontrolinis sąrašas:
//     - Naming: Ar pavadinimai aiškiai apibūdina paskirtį? Ar vengiate bendrinių `data`, `info`, `doStuff`?
//     - Comments: Ar komentarai paaiškina kodėl, o ne ką ? Ar nėra slengo, skyriklių, „banerių“, mirusio kodo?
//     - Formatting(vertical): Ar atskirtos loginės dalys tuščiomis eilutėmis?
//     - Formatting(horizontal): Ar nevienijate per daug logikos vienoje eilutėje?
//     - Failų skaidymas: Ar verta iškelti validacijas, DB, token'ų kūrimą į atskirus modulius?