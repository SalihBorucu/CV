<template>
    <div :class="{ 'small-box darkblue': true, active: activation === '3' }">
        <h1 value="3">Projects</h1>
        <img
            value="3"
            v-if="activation != '3'"
            class="icon"
            :src="'/img/icons/programming/png/022-keyboard.png'"
            alt=""
        />
        <div class="active-state" v-if="activation === '3'">
            <div class="Close" value="7">
                <span class="top" value="7"></span>
                <span class="bot" value="7"></span>
            </div>
            <div class="arrow" @click="$emit('nextPage', 'value')"></div>
        </div>

        <div class="row">
            <!-- <transition name="bounce">
                <div
                    class="col"
                    v-if="activation === '3'"
                    style="animation-delay: .8s"
                >
                    <div class="description">
                        <h2>My Food Rota</h2>
                        <div class="video">
                            <iframe
                                class="demo"
                                :src="'/videos/myfoodrota.mp4'"
                                allowfullscreen
                            />
                        </div>
                        <p>
                            A simple platform for creating a weekly food rota
                            with a final shopping list. This was my first
                            project with XAMPP exploring html, css, javascript,
                            php and a brief introduction to GSAP.
                        </p>
                        <h2>Tools Used In this project</h2>
                        <div class="logos">
                            <img
                                value="3"
                                class="logo basic"
                                :src="'/img/pglogos/html.png'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo basic"
                                :src="'/img/pglogos/css.png'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/js.png'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/bootstrap.png'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/php.png'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/jquery.gif'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/GSAP.svg'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </transition> -->
            <transition name="bounce">
                <div
                    class="col"
                    v-if="activation === '3'"
                    style="animation-delay: .8s"
                >
                    <div class="description">
                        <h2>Issue-Tracker</h2>
                        <div class="video">
                            <iframe
                                class="demo"
                                :src="'/videos/issue-tracker.mp4'"
                                allowfullscreen
                            />
                        </div>
                        <p>
                            A platform for project management enabling the users
                            to create, edit, delete tasks and containers as well
                            as a dragable task adjustor. The UI for the platform
                            was purchased and adapted from Zawiastudio.com.
                            please feel free to tryout on
                            <a>issue-tracker.salihborucu.com</a>
                            .
                        </p>
                        <h2>Tools Used In this project</h2>
                        <div class="logos"></div>
                        <img
                            value="3"
                            class="logo"
                            :src="'/img/pglogos/vuejs.png'"
                            alt=""
                        />
                        <img
                            value="3"
                            class="logo"
                            :src="'/img/pglogos/dragula.svg'"
                            alt=""
                        />
                        <img
                            value="3"
                            class="logo"
                            :src="'/img/pglogos/laravel.png'"
                            alt=""
                        />
                        <img
                            value="3"
                            class="logo"
                            :src="'/img/pglogos/bootstrap.png'"
                            alt=""
                        />
                    </div>
                </div>
            </transition>

            <transition name="bounce">
                <div
                    class="col"
                    v-if="activation === '3'"
                    style="animation-delay: .8s"
                >
                    <div class="description">
                        <h2>Journey CRM</h2>
                        <div class="video">
                            <iframe
                                class="demo"
                                :src="'/videos/JourneyCRM.mp4'"
                                allowfullscreen
                            />
                        </div>
                        <p>
                            A CRM tool designed for tele-marketers and business
                            development representatives to store lead
                            informations, conduct daily contacting activities as
                            well as a brief reporting function. This project was
                            shaped while learning Laravel, Twilio and
                            Datatables.
                        </p>
                        <h2>Tools Used In this project</h2>
                        <div class="logos">
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/laravel.png'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/twilio.png'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/bootstrap.png'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/php.png'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/jquery.gif'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </transition>
            <transition name="bounce">
                <div
                    class="col"
                    v-if="activation === '3'"
                    style="animation-delay: .8s"
                >
                    <div class="description">
                        <h2>CSV Editor</h2>
                        <div class="video">
                            <iframe
                                class="demo"
                                :src="'/videos/CSVeditor.mp4'"
                                allowfullscreen
                            />
                        </div>
                        <p>
                            A single page application for CSV editing/filtering
                            with everything handled on the front-end. This
                            project was to confirm my understanding of VueJS and
                            developing without jQuery.
                        </p>
                        <h2>Tools Used In this project</h2>
                        <div class="logos">
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/vuejs.png'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/laravel.png'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/js.png'"
                                alt=""
                            />
                            <img
                                value="3"
                                class="logo"
                                :src="'/img/pglogos/bootstrap.png'"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </transition>
        </div>
    </div>
</template>

<script>
export default {
    props: ["activation"],

    mounted() {
        console.log("Smallbox2 mounted.");
    }
};
</script>
