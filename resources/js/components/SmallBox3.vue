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
                                src="https://www.youtube.com/embed/Bg2U7nwsLMY?autoplay=1"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
                        </div>
                        <p>
                            A platform for project management enabling the users
                            to create, edit, delete tasks and containers as well
                            as a dragable task adjustor. The UI for the platform
                            was purchased and adapted from Zawiastudio.com.
                            please feel free to tryout on
                            <a
                                href="http://issue-tracker.salihborucu.com/login"
                                target="_blank"
                                >issue-tracker.salihborucu.com</a
                            >
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
                                src="https://www.youtube.com/embed/NQMjdVYkQ-g?autoplay=1"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
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
                                src="https://www.youtube.com/embed/IL3GUZtDCZI?autoplay=1"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
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

    mounted() {}
};
</script>
