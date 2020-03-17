<template>
    <div :class="{ 'small-box blue': true, active: activation === '5' }">
        <h1 value="5">Hobbies</h1>
        <img
            value="5"
            v-if="activation != '5'"
            class="icon"
            :src="'/img/icons/universal/png/speaker-audio-tool-symbol.png'"
            alt=""
        />
        <div class="active-state" v-if="activation === '5'">
            <div class="Close" value="7">
                <span class="top" value="7"></span>
                <span class="bot" value="7"></span>
            </div>
            <div class="arrow" @click="$emit('nextPage', 'value')"></div>
        </div>
        <transition name="bounce">
            <div
                class="row hobbies"
                v-if="activation === '5'"
                style="animation-delay: .8s"
            >
                <div class="description">
                    <div class="col-2">
                        <h2>Music</h2>
                        <div class="video">
                            <iframe
                                class="demo sensijam"
                                src="https://www.youtube.com/embed/19pFvWWLHcE?autoplay=1&mute=1"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
                        </div>
                        <p style="padding: 0 20px 0 20px">
                            I have been involved in various live music bands in
                            the past, Sensijam was the last venture of my
                            passion for playing instruments as well as amateur
                            producing using Ableton Live. Feel free to checkout
                            my band below.
                        </p>
                        <div class="col">
                            <a
                                target="_blank"
                                href="https://www.facebook.com/sensijam"
                            >
                                <img
                                    class="logo social"
                                    :src="
                                        '/img/icons/social/png/001-facebook.png'
                                    "
                                    alt=""
                                />
                            </a>
                            <a
                                target="_blank"
                                href="https://www.youtube.com/channel/UCOPt3rW-AtjxYmnR_DB-zlw"
                            >
                                <img
                                    class="logo social"
                                    :src="
                                        '/img/icons/social/png/008-youtube.png'
                                    "
                                    alt=""
                                />
                            </a>
                            <a
                                target="_blank"
                                href="https://www.instagram.com/sensijam/"
                            >
                                <img
                                    class="logo social"
                                    :src="
                                        '/img/icons/social/png/011-instagram.png'
                                    "
                                    alt=""
                                />
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <br /><br />
                        <h2>Running and Cycling</h2>
                        <img
                            class="logo"
                            :src="'/img/pglogos/running.png'"
                            alt=""
                        />
                        <p>
                            I love going out for a jog or a cycle to keep my
                            body ticking.
                        </p>
                        <br /><br />
                        <h2>Programming For Pi</h2>
                        <img class="logo" :src="'/img/pglogos/pi.png'" alt="" />
                        <p>
                            Exploring the physical side of programming to mostly
                            work on retro arcade games and basic Pi
                            introductions.
                        </p>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    props: ["activation"]
};
</script>
