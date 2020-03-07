<template>
    <div
        :class="{
            'small-box orange': true,
            active: activation === '1'
        }"
    >
        <h1 value="1">About Me</h1>
        <img
            value="1"
            v-if="activation != '1'"
            class="icon"
            :src="'/img/icons/usher-man-with-tie.png'"
            alt=""
        />

        <div class="active-state" v-if="activation === '1'">
            <div class="Close" value="7">
                <span class="top" value="7"></span>
                <span class="bot" value="7"></span>
            </div>
            <div class="arrow bounce" @click="$emit('nextPage', 'value')"></div>
        </div>

        <div class="row">
            <transition name="bounce">
                <div
                    class="col"
                    v-if="activation === '1'"
                    style="animation-delay: .6s"
                >
                    <div class="picFrame">
                        <img class="profilePic" src="/img/CVPHOTO.jpg" alt="" />
                    </div>
                </div>
            </transition>
            <transition name="bounce">
                <div
                    class="col-2"
                    v-if="activation === '1'"
                    style="animation-delay: .8s"
                >
                    <p class="description">
                        Hi my name is Salih and welcome to my resume! I am an
                        ambitious Management Studies graduate with vast
                        knowledge in SAAS space and a passion for developing web
                        pages. I have been educating myself in web development
                        for over a year day and night as well as working as a
                        business development representative. Alongside my
                        non-stop drive for improvement, I also contribute to
                        some free-lance projects on a regular basis. I have
                        ticked a lot of boxes along the way to be comfortable
                        about calling myself a full-stack developer and
                        currently I am ready to be involved in new projects.
                        Please feel free to have a look at my current
                        <a value="3"> projects</a> and also to
                        <a value="6">
                            contact
                        </a>
                        me to discuss what more I can offer.
                    </p>
                </div>
            </transition>
        </div>
        <transition name="bounce">
            <div
                class="row"
                v-if="activation === '1'"
                style="animation-delay: 1s"
            >
                <div class="skills">
                    <div class="col">
                        <h2>Languages and FrameWorks</h2>
                        <div class="col-half">
                            <p>
                                <img
                                    value="1"
                                    class="logo"
                                    :src="'/img/pglogos/laravel.png'"
                                    alt=""
                                />Laravel
                            </p>

                            <p>
                                <img
                                    value="1"
                                    class="logo"
                                    :src="'/img/pglogos/vuejs.png'"
                                    alt=""
                                />VueJs
                            </p>
                            <p>
                                <img
                                    value="1"
                                    class="logo"
                                    :src="'/img/pglogos/html.png'"
                                    alt=""
                                />HTML
                            </p>
                            <p>
                                <img
                                    value="1"
                                    class="logo"
                                    :src="'/img/pglogos/css.png'"
                                    alt=""
                                />CSS/SCSS
                            </p>
                            <p>
                                <img
                                    value="1"
                                    class="logo"
                                    :src="'/img/pglogos/bootstrap.png'"
                                    alt=""
                                />Bootstrap
                            </p>
                        </div>
                        <div class="col-half">
                            <p>
                                <img
                                    value="1"
                                    class="logo"
                                    :src="'/img/pglogos/js.png'"
                                    alt=""
                                />JavaScript
                            </p>
                            <p>
                                <img
                                    value="1"
                                    class="logo"
                                    :src="'/img/pglogos/php.png'"
                                    alt=""
                                />PHP
                            </p>
                            <p>
                                <img
                                    value="1"
                                    class="logo"
                                    :src="'/img/pglogos/mysql.png'"
                                    alt=""
                                />MySql
                            </p>
                            <p>
                                <img
                                    value="1"
                                    class="logo"
                                    :src="'/img/pglogos/GSAP.svg'"
                                    alt=""
                                />GSAP
                            </p>
                            <p>
                                <img
                                    value="1"
                                    class="logo"
                                    :src="'/img/pglogos/jquery.gif'"
                                    alt=""
                                />jQuery
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <h2>Completed Tutorials</h2>
                        <p>
                            Vue JS 2 - The Complete Guide - Maximillian
                            Schwarzmuller
                        </p>
                        <p>Advanced CSS and Sass - Jonas Schmedtmann</p>

                        <p>Laravel 5.7 From Scratch - Jeffrey Way</p>
                        <p>The Web Developer Bootcamp - Colt Steele</p>
                        <p>PHP for Beginners - Edwin Diaz</p>
                    </div>
                    <div class="col">
                        <h2>Software Packages</h2>
                        <p>MySql Workbench</p>
                        <p>Git</p>
                        <p>Atlassian Tools</p>
                        <p>CS6 Photoshop</p>
                        <p>Salesforce.com</p>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    props: ["activation"],

    mounted() {},
    data() {
        return {};
    },
    methods: {}
};
</script>
