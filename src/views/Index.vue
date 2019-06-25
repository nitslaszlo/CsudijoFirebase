<template>
  <div>
    <!-- Navigáció -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#rolunk">Rólunk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#etlap">Étlap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#legnepszerubb">Legnépszerűbb</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#vendegkonyv">Vendégkönyv</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kapcsolat">Kapcsolat</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Fejléc -->
    <header id="fejlec">
      <div class="container-fluid h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h1>Csudijó Étterem</h1>
            <p class="motto">Ahol az ízek életre kelnek</p>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <!-- Rólunk -->
      <section id="rolunk">
        <h2>Rólunk</h2>

        <p>
          A Csudijó Étterem, Magyarország egyik legszebb vidékén, a festői Pitypangtövis hegy lábánál csörgedező Csicseri patak partján található. A fáradt utazó nálunk megtalálhatja mindazt, amire vágyik: kiváló ételeink Mindróf Benedek mesterszakácsunk kifinomult
          ízvilágát dicsérik, a desszerteket a környék méltán világhíres Mézmanna cukrászata szállítja számunkra, a helyben készült pitypangtövisi kézműves sörök telt aromája pedig rabul ejti kostolójukat. Ha nem csak egy mennyei ebédre látogat meg
          minket, hanem szívesen időzne még a környék mesebéli tájain, akkor panziónkban minden igényt kielégítő otthonos apartmanjaink várják a családokat, párokat vagy épp a magányos vándort. Térjen be hozzánk, hogy vendéglátásunkkal Önnek is
          Csudijó napot varázsolhassunk!
        </p>

        <img src="./kepek/csicseri.jpg" alt="Csicseri patak" title="Csicseri patak">
      </section>

      <!-- Étlap -->
      <section id="etlap" class="szurke-hatter">
        <h2>Ízelítő étlapunkról</h2>
        <!-- Étel kártyák -->
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="card">
              <img class="card-img-top" src="./kepek/etlap1.jpg" alt>
              <div class="card-body">
                <h4 class="card-title">TEJSZÍNES-MUSTÁROS CSIRKE ALMÁVAL</h4>
                <p class="card-text">
                  A csirkét vajon megpirítjuk, sóval és borssal ízesítjük. Hozzáadjuk a megtisztított hagymát, a feldarabolt zellert, és néhány percig együtt pirítjuk, majd felöntjük a borral és az alaplével. A kimagozott, gerezdekre vágott almákat megpirítjuk. Tejszínes
                  kukoricalisztet, mustárt és a tárkonyt keverve a pecsenyeléhez mártást készítünk. A hús-, a zöldség- és az alma darabokat beleforgatjuk a mártásba, majd forrón, friss kenyérrel kínáljuk.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="card">
              <img class="card-img-top" src="./kepek/etlap2.jpg" alt>
              <div class="card-body">
                <h4 class="card-title">LECSÓ KOLBÁSZCSIPSSZEL</h4>
                <p class="card-text">
                  A hajszálvékonyra szeletelt kolbászt forró serpenyőben ropogósra sütjük. Kolbászzsíron megfonnyasztjuk az apróra vágott vöröshagymát, majd megszórjuk és elkeverjük a pirospaprikával. Feldarabolt paprikát és paradicsomot adunk hozzá. Megsózzuk, megborsozzuk
                  ízlés szerint. A frissen elkészült lecsót a ropogós kolbászcsipsszel megszórva tálaljuk, friss kenyeret és főtt rizst kínálunk mellé.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="card">
              <img class="card-img-top" src="./kepek/etlap3.jpg" alt>
              <div class="card-body">
                <h4 class="card-title">BÖGRÉBEN SÜLT PARADICSOMOS TÉSZTA</h4>
                <p class="card-text">
                  A tésztát kifőzzük, leszűrjük, és olívaolajjal összekeverjük. Egy bögrébe pizzaszószt kanalazunk, megszórjuk felkockázott mozzarellával, felaprított bazsalikommal, majd ismét paradicsomszószt és mozzarellát teszünk rá. A kifőtt tésztával körberakjuk az
                  edényünket, meglocsoljuk paradicsomszósszal, majd sütőbe rakjuk. A kisült a tésztát tányérra borítjuk és forrón tálaljuk.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="card">
              <img class="card-img-top" src="./kepek/etlap4.jpg" alt>
              <div class="card-body">
                <h4 class="card-title">TORTELLINIS PARADICSOMLEVES</h4>
                <p class="card-text">
                  Lábasban olívaolajon megfonnyasztjuk a kétféle felpirított hagymát, és babérleveleket adunk hozzá. A hagymás keverékbe forgatjuk a darabolt paradicsomot, lecsipkedett bazsalikom leveleket adunk hozzá, sózzuk, borsozzuk. A levest joghurttal dúsítjuk és
                  tortellinivel gazdagítjuk. Melegen, egy kevés aprított bazsalikommal és leforgácsolt parmezánnal megszórva tálaljuk.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Legnépszerűbb -->
      <section class="legnepszerubb" id="legnepszerubb">
        <h2>Legnépszerűbb étel az étlapunkról a szavazatok szerint:</h2>
        <p> {{ legnepszerubbEtel.join(" és a(z) ") }}</p>
      </section>

      <!-- Szavazás -->
      <section id="szavazas" class="szurke-hatter">
        <h2>Szavazzon a legnepszerűbb ételünkre</h2>
        <form>
          <div class="form-group">
            <label for="foodInput">Új étel felvétele szavazással:</label>
            <b-input v-model="food.nev" id="foodInput"></b-input>
          </div>
          <button type="button" class="btn btn-secondary" @click="addNewFood()">Felvesz + szavaz</button>
        </form>
        <h2>Szavazás állása:</h2>
        <div>
          <b-table
            id="foodsTable"
            striped
            :items="foods"
            :fields="foodFields"
            :per-page="perPage"
            :current-page="currentPageFoods"
          >
          <b-button
              slot="szavazas"
              slot-scope="row"
              variant="info"
              size="sm"
              @click="newVote(row.item)"
            >Szavaz</b-button>
          </b-table>
          <b-pagination
            v-model="currentPageFoods"
            :total-rows="foodsTotalRows"
            :per-page="perPage"
            aria-controls="foodsTable"
            hide-goto-end-buttons
          ></b-pagination>
        </div>
      </section>

      <!-- Vendégkönyv -->
      <section id="vendegkonyv" class="szurke-hatter">
        <h2>Vendégkönyv</h2>
        <p>Ossza meg másokkal, hogy mi tetszett nálunk, és mondja el nekünk, hogy mivel tehetnénk még kellemesebbé itt létét legközelebb!</p>
        <form>
          <div class="form-group">
            <label for="bejegyzes">Bejegyzés:</label>
            <textarea class="form-control" id="bejegyzes" rows="5" v-model="newEntry.bejegyzes"></textarea>
          </div>
          <button type="button" class="btn btn-secondary" @click="addNewEntry()">Bejegyzés elküldése</button>
        </form>
        <h2>Korábbi bejegyzések:</h2>
        <div>
          <b-table
            id="my-table"
            striped
            :items="entries"
            :fields="fields"
            :per-page="perPage"
            :current-page="currentPage"
          >
            <b-button
              slot="torles"
              slot-scope="row"
              variant="danger"
              size="sm"
              @click="deleteEntry(row.item)"
            >Töröl</b-button>
          </b-table>
          <b-pagination
            v-model="currentPage"
            :total-rows="totalRows"
            :per-page="perPage"
            aria-controls="my-table"
            hide-goto-end-buttons
          ></b-pagination>
        </div>
      </section>
    </div>

    <!-- Kapcsolat -->
    <footer id="kapcsolat" class="py-4 bg-dark text-white-50">
      <div class="text-center">
        <small>
          Csudijó Étterem
          <br>9999 Karakumszörcsög
          <br>Macskakapocs utca 29.
          <br>Telefon: +36 55 555-5555
          <br>Email:
          <a href="mailto:kapcsolat@csudijo-etterem.hu">kapcsolat@csudijo-etterem.hu</a>
        </small>
      </div>
    </footer>
  </div>
</template>

<script  lang="ts">
import { Component, Vue } from "vue-property-decorator";
import firebase, { storage } from "firebase";
import db from "@/firebaseApp";

interface IEntries {
  bejegyzes: string;
}

interface IFood {
  nev: string;
  szavazatDb: number;
}

@Component
export default class Index extends Vue {
  private currentPage: number = 1;
  private currentPageFoods: number = 1;
  private perPage: number = 5;
  private entries: any = [];
  private newEntry: IEntries = { bejegyzes: "" };
  private foods: any = [];
  private food: IFood = { nev: "", szavazatDb: 1 };
  private legnepszerubbEtel = ["Még nem szavaztak ételre!"];

  get totalRows(): number {
    return this.entries.length;
  }

  get foodsTotalRows(): number {
    return this.foods.length;
  }

  private fields = [
    { key: "bejegyzes", label: "Bejegyzés", sortable: false },
    { key: "createdAt", label: "Dátum/Idő", sortable: false },
    { key: "torles", label: "Törlés", sortable: false }
  ];

  private foodFields = [
    { key: "nev", label: "Név", sortable: false },
    { key: "szavazatDb", label: "Szavazatok száma", sortable: false },
    { key: "szavazas", label: "Szavazás", sortable: false }
  ];

  public mounted() {
    this.getAllEntries();
    this.getAllFoods();
  }

  private getAllEntries() {
    this.entries = [];
    db.collection("vendegkonyv")
      .orderBy("createdAt")
      .get()
      .then(doc => {
        doc.forEach(x => {
          const record: any = x.data();
          record.id = x.id;
          this.entries.push(record);
        });
      })
      .catch(err => {
        alert(`Error getting entries ${err}`);
      });
  }

  private getAllFoods() {
    this.foods = [];
    this.legnepszerubbEtel = [];
    let maxSzavazat = "";
    db.collection("szavazas")
      .orderBy("szavazatDb", "desc")
      .get()
      .then(doc => {
        doc.forEach(x => {
          if (maxSzavazat === "") {
            maxSzavazat = x.data().szavazatDb;
          }
          if (x.data().szavazatDb === maxSzavazat) {
            this.legnepszerubbEtel.push(x.data().nev);
          }
          const record: any = x.data();
          record.id = x.id;
          this.foods.push(record);
        });
      })
      .catch(err => {
        alert(`Error getting votes ${err}`);
      });
  }

  private addNewEntry(): void {
    if (this.newEntry.bejegyzes.length === 0) {
      return;
    }
    const obj = {} as any;
    obj.bejegyzes = this.newEntry.bejegyzes;
    obj.createdAt = new Date().toLocaleString();
    db.collection("vendegkonyv")
      .add(obj)
      .then(docRef => {
        alert(
          `Adatok mentése sikeres!\nRekord azonosítója: ${
            docRef.id
          }\nKöszönöm a válaszát!`
        );
        this.newEntry.bejegyzes = "";
        this.getAllEntries();
      })
      .catch(error => {
        alert(`Hiba az adatok mentésekor: ${error}`);
        return;
      });
  }

  private addNewFood(): void {
    if (this.food.nev.length === 0) {
      return;
    }
    const obj = {} as any;
    obj.nev = this.food.nev;
    obj.szavazatDb = this.food.szavazatDb;
    db.collection("szavazas")
      .add(obj)
      .then(docRef => {
        alert(
          `Adatok mentése sikeres!\nRekord azonosítója: ${
            docRef.id
          }\nKöszönöm a szavazatát!`
        );
        this.food.nev = "";
        this.getAllFoods();
      })
      .catch(error => {
        alert(`Hiba az adatok mentésekor: ${error}`);
        return;
      });
  }

  private deleteEntry(item: any): void {
    db.collection("vendegkonyv")
      .doc(item.id)
      .delete()
      .then(() => {
        alert("Entry deleted!");
        this.getAllEntries();
      })
      .catch((error: any) => {
        alert(`Error deleting entry: ${error}`);
      });
  }

  private newVote(item: any): void {
    const ujSzavazatDb: number = parseInt(item.szavazatDb, 10) + 1;
    const obj = {} as any;
    obj.nev = item.nev;
    obj.szavazatDb = ujSzavazatDb;
    db.collection("szavazas").doc(item.id)
      .update(obj)
      .then(() => {
        console.log("Update succes!");
        this.getAllFoods();
      })
      .catch((err: any) => {
        console.log("Update Error!", err);
      });
  }
}
</script>

<style scoped>
nav {
  font-weight: 500;
}

#fejlec {
  height: 100vh;
  min-height: 500px;
  background-image: url("./kepek/etterem.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  color: white;
}

h1 {
  font-size: 6em;
  font-weight: 300;
}

h2 {
  padding-top: 10px;
  font-weight: 300;
}

section {
  padding: 15px 15px 15px 15px;
  margin-bottom: 15px;
}

a:link,
a:visited {
  color: rgb(236, 236, 236);
}

a:hover,
a:active {
  color: white;
  text-decoration: none;
}

.card {
  height: 100% !important;
}

.szurke-hatter {
  background-color: rgb(236, 236, 236);
}

html,
body {
  line-height: 1.8;
}

p {
  font-weight: 300;
}

.motto {
  font-size: 3em;
}

#rolunk img {
  max-width: 100%;
}
</style>