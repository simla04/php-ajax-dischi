<div id="app">


    <header class="p-3">
        <i class="fa-brands fa-spotify text-white fa-2x"></i>
    </header>

    <!-- struttura a colonne -->
    <div class="container">
        <div class="row">
            <div class="col-4 g-3" v-for="(elem, index) in arrayDischi" :key="index">
                <div class="card text-white m-2" style="width: 18rem;">
                    <img :src="elem.poster" class="card-img-top" :alt="elem.title">
                    <div class="card-body">
                        <h5 class="card-title">{{elem.title}}</h5>
                        <div class="card-text">{{elem.genre}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>