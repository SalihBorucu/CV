<template>
    <div :class="{ 'small-box lightblue': true, active: activation === '2' }">
        <h1 value="2">Experience</h1>
        <img
            value="2"
            v-if="activation != '2'"
            class="icon"
            :src="'/img/icons/universal/png/stats.png'"
            alt=""
        />
        <div class="active-state" v-if="activation === '2'">
            <div class="Close" value="7">
                <span class="top" value="7"></span>
                <span class="bot" value="7"></span>
            </div>
            <div class="arrow bounce" @click="$emit('nextPage', 'value')"></div>
        </div>
        <transition name="bounce">
            <div
                class="row"
                v-if="activation === '2'"
                style="animation-delay: .6s"
            >
                <div class="description">
                    <div class="col">
                        <img
                            value="2"
                            :src="'/img/pglogos/dwcc.png'"
                            alt=""
                            class="companyLogo"
                        />
                    </div>

                    <div class="col-2">
                        <h2>Business Development Representative</h2>
                        <p><strong>DWCC - 2019 January -> Current</strong></p>
                        <p>
                            Managing the end to end account based marketing
                            cycle from initial account identification and lead
                            research, through to stakeholder engagement in
                            strategic key accounts, ultimately driving market
                            share and build pipeline for our various customers.
                        </p>
                        <p>
                            This role has encouraged me to discover the supply
                            chain, DevOps and sales enablement SaaS space.
                            Alongside my daily activities in my spare time I
                            supported the development of the company webpage
                            using HTML, CSS and Javascript for integrated forms
                            alongside Wix. Please feel free to visit the
                            <a href="https://www.dwcc.global/" target="_blank">
                                page
                            </a>
                            and inspect.
                        </p>
                    </div>
                </div>
            </div>
        </transition>
        <transition name="bounce">
            <div
                class="row"
                v-if="activation === '2'"
                style="animation-delay: .8s"
            >
                <div class="description">
                    <div class="col">
                        <img :src="'/img/pglogos/jdw.png'" alt="" class="JDW" />
                    </div>
                    <div class="col-2">
                        <h2>Shift Manager</h2>
                        <p>
                            <strong
                                >JD Wetherspoon - 2015 September -> 2019
                                January</strong
                            >
                        </p>
                        <p>
                            As a Mod 2 Shift Manager I was responsible for
                            implementing the business strategy through out by
                            quick decision-making, delegation and planned
                            business models. Providing perfect customer service
                            in a fast-paced environment and forming the bridge
                            between the area manager and the staff.
                        </p>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    props: ["activation"],
    mounted() {}
};
</script>
