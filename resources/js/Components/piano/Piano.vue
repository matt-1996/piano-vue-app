<script setup>
import {onMounted, ref} from "vue";
import InputLabel from "@/Components/InputLabel.vue";

const sound = ref()
function playNote(note){
    const key = document.getElementById(note)
    key.classList.add('active')

    setTimeout(() => {
        key.classList.remove('active')
    },200)

    console.log(note)

    sound.value = new Audio(`/assets/${note}.mp3`)
    // sound.value.src = `/assets/C1.mp3`;
    sound.value.play();


}

onMounted(() => {
    // this.$refs.focusMe.focus()
    document.addEventListener("keypress", function onPress(event) {
        const key = event.key
        switch (key){
            case 'a' :
                playNote('C1')
                break;
            case 'w' :
                playNote('CSharp1')
                break;
            case 's' :
                playNote('D1')
                break;
            case 'e' :
                playNote('DSharp1')
                break;
            case 'd' :
                playNote('E1')
                break;
            case 'f' :
                playNote('F1')
                break;
            case 't' :
                playNote('FSharp1')
                break
            case 'g' :
                playNote('G1')
                break;
            case 'y' :
                playNote('GSharp1')
                break
            case 'h':
                playNote('A1');
            break;
            case 'u' :
                playNote('ASharp1')
                break
            case 'j' :
                playNote('B1')
            break
            case 'k' :
                playNote('C2')
                break
            default :
                playNote('C1')
                break
        }

    });
})

function doSomething(e){
    console.log(e)
}

function stopPlaying(){
    // setTimeout(() => {
    //     sound.value.pause()
    //     sound.currentTime = 0;
    // },0)
}
</script>

<template>
    <div class="container">
        <div class="intro-container">

        </div>
        <div class="piano-container">
            <ul class="piano-keys-list">
                <li class="piano-keys white-key"
                    data-list="C1" id="C1" onkeyup="doSomething(event)" @keydown.shift.exact="playNote('C1')" @mousedown="playNote('C1')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys black-key"
                    data-list="C#1" id="CSharp1" @mousedown="playNote('CSharp1')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys white-key"
                    data-list="D1" id="D1" @mousedown="playNote('D1')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys black-key"
                    data-list="D#1" id="DSharp1" @mousedown="playNote('DSharp1')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys white-key"
                    data-list="E1" id="E1" @mousedown="playNote('E1')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys white-key"
                    data-list="F1" id="F1" @mousedown="playNote('F1')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys black-key"
                    data-list="F#1" id="FSharp1" @mousedown="playNote('FSharp1')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys white-key"
                    data-list="G1" id="G1" @mousedown="playNote('G1')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys black-key"
                    data-list="G#1" id="GSharp1" @mousedown="playNote('GSharp1')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys white-key"
                    data-list="A1" id="A1" @mousedown="playNote('A1')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys black-key"
                    data-list="A#1" id="ASharp1" @mousedown="playNote('ASharp1')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys white-key"
                    data-list="B1" id="B1" @mousedown="playNote('B1')" @mouseup="stopPlaying()">
                </li>

<!--                Octave 2-->

                <li class="piano-keys white-key"
                    data-list="C2" id="C2" @mousedown="playNote('C2')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys black-key"
                    data-list="C#2" id="CSharp2" @mousedown="playNote('CSharp2')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys white-key"
                    data-list="D2" id="D2"  @mousedown="playNote('D2')" @mouseup="stopPlaying()">
                </li>
                <li class="piano-keys black-key"
                    data-list="D#2" id="DSharp2" @mousedown="playNote('DSharp2')" @mouseup="stopPlaying">
                </li>
                <li class="piano-keys white-key"
                    data-list="E2" id="E2" @mousedown="playNote('E2')" @mouseup="stopPlaying">
                </li>
                <li class="piano-keys white-key"
                    data-list="F2">
                </li>
                <li class="piano-keys black-key"
                    data-list="F#2">
                </li>
                <li class="piano-keys white-key"
                    data-list="G2">
                </li>
                <li class="piano-keys black-key"
                    data-list="G#2">
                </li>
                <li class="piano-keys white-key"
                    data-list="A2">
                </li>
                <li class="piano-keys black-key"
                    data-list="A#2">
                </li>
                <li class="piano-keys white-key"
                    data-list="B2">
                </li>

<!--                Octave 3-->

<!--                <li class="piano-keys white-key"-->
<!--                    data-list="C3">-->
<!--                </li>-->
<!--                <li class="piano-keys black-key"-->
<!--                    data-list="C#3">-->
<!--                </li>-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="D3">-->
<!--                </li>-->
<!--                <li class="piano-keys black-key"-->
<!--                    data-list="D#3">-->
<!--                </li>-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="E3">-->
<!--                </li>-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="F3">-->
<!--                </li>-->
<!--                <li class="piano-keys black-key"-->
<!--                    data-list="F#3">-->
<!--                </li>-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="G3">-->
<!--                </li>-->
<!--                <li class="piano-keys black-key"-->
<!--                    data-list="G#3">-->
<!--                </li>-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="A3">-->
<!--                </li>-->
<!--                <li class="piano-keys black-key"-->
<!--                    data-list="A#3">-->
<!--                </li>-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="B3">-->
<!--                </li>-->

<!--&lt;!&ndash;                Octave 4&ndash;&gt;-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="C4">-->
<!--                </li>-->
<!--                <li class="piano-keys black-key"-->
<!--                    data-list="C#4">-->
<!--                </li>-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="D4">-->
<!--                </li>-->
<!--                <li class="piano-keys black-key"-->
<!--                    data-list="D#4">-->
<!--                </li>-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="E4">-->
<!--                </li>-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="F4">-->
<!--                </li>-->
<!--                <li class="piano-keys black-key"-->
<!--                    data-list="F#4">-->
<!--                </li>-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="G4">-->
<!--                </li>-->
<!--                <li class="piano-keys black-key"-->
<!--                    data-list="G#4">-->
<!--                </li>-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="A4">-->
<!--                </li>-->
<!--                <li class="piano-keys black-key"-->
<!--                    data-list="A#4">-->
<!--                </li>-->
<!--                <li class="piano-keys white-key"-->
<!--                    data-list="B4">-->
<!--                </li>-->

            </ul>
        </div>
    </div>
</template>

<style>
body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

.container {
    background-image:
        linear-gradient(90deg, #9331d4, rgb(239 5 92 / 70%));
    height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: center;
    overflow: scroll;
}

.active{
    background-color: beige !important;
}

.intro-container {
    color: #fff;
    text-align: center;
}

.piano-container {
    display: flex;
    align-items: center;
    padding-left: 2rem;
    justify-content: center;
    overflow: scroll;
}

.piano-keys-list {
    list-style: none;
    display: flex;
    justify-content: start;
    overflow: scroll;
}

.piano-keys {
    width: 5rem;
    cursor: pointer;
    position: relative;
    height: 20rem;
    border-radius: 10px;
    border: 1px solid #000;
}

.white-key {
    background-color: #fff;
}

.white-key:active{
    background-color: beige;
}

.black-key {
    width: 2rem;
    height: 13rem;
    border-radius: 5px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #000;
    z-index: 2;
    margin: 0 -20px 0 -20px;
}

@media screen and (min-width: 821px) and (max-width: 1024px) {
    .piano-keys {
        width: 4rem;
        cursor: pointer;
        position: relative;
        height: 20rem;
        border-radius: 10px;
        border: 1px solid #000;
    }

    .black-key {
        width: 2rem;
        height: 13rem;
        border-radius: 5px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        background-color: #000;
        z-index: 2;
        margin: 0 -20px 0 -20px;
    }
}

@media screen and (min-width: 768px) and (max-width: 820px) {
    .piano-keys {
        width: 3.5rem;
        cursor: pointer;
        position: relative;
        height: 16rem;
        border-radius: 10px;
        border: 1px solid #000;
    }

    .black-key {
        width: 1.8rem;
        height: 10rem;
        border-radius: 5px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        background-color: #000;
        z-index: 2;
        margin: 0 -20px 0 -20px;
    }
}

@media screen and (max-width: 576px) {
    .piano-container {
        width: 90%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        overflow: auto;
    }

    .piano-keys {
        width: 3.5rem;
        cursor: pointer;
        position: relative;
        height: 16rem;
        border-radius: 10px;
        border: 1px solid #000;
    }

    .black-key {
        width: 1.8rem;
        height: 10rem;
        border-radius: 5px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        background-color: #000;
        z-index: 2;
        margin: 0 -20px 0 -20px;
    }
}
</style>
