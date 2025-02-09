<style>
    .loaderArea {
        min-height: 100vh;
        background: #F5F9FF;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 100000;
    }
    .loader {
        position: relative;
        width: 85px;
        height: 50px;
        background-repeat: no-repeat;
        background-image: linear-gradient(#bedbf7 50px, transparent 0),
                        linear-gradient(#bedbf7 50px, transparent 0),
                        linear-gradient(#bedbf7 50px, transparent 0),
                        linear-gradient(#bedbf7 50px, transparent 0),
                        linear-gradient(#bedbf7 50px, transparent 0),
                        linear-gradient(#bedbf7 50px, transparent 0);
        background-position: 0px center, 15px center, 30px center, 45px center, 60px center, 75px center, 90px center;
        animation: rikSpikeRoll 1.65s linear infinite alternate;
    }
    @keyframes rikSpikeRoll {
    0% { background-size: 10px 3px;}
    16% { background-size: 10px 50px, 10px 3px, 10px 3px, 10px 3px, 10px 3px, 10px 3px}
    33% { background-size: 10px 30px, 10px 50px, 10px 3px, 10px 3px, 10px 3px, 10px 3px}
    50% { background-size: 10px 10px, 10px 30px, 10px 50px, 10px 3px, 10px 3px, 10px 3px}
    66% { background-size: 10px 3px, 10px 10px, 10px 30px, 10px 50px, 10px 3px, 10px 3px}
    83% { background-size: 10px 3px, 10px 3px,  10px 10px, 10px 30px, 10px 50px, 10px 3px}
    100% { background-size: 10px 3px, 10px 3px, 10px 3px,  10px 10px, 10px 30px, 10px 50px}
    }
    .hide-preloader {
        animation: hidePreloader 1s;
    }

    .preloader-hidden {
        display: none;
    }
</style>
