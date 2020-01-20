<template>
    <div :class="{ 'small-box darkorange': true, active: activation === '6' }">
        <h1 value="6">Contact</h1>
        <img
            value="6"
            v-if="activation != '6'"
            class="icon"
            :src="'/img/icons/universal/png/id-card-interface-symbol.png'"
            alt=""
        />
        <div class="active-state" v-if="activation === '6'">
            <div class="Close" value="7">
                <span class="top" value="7"></span>
                <span class="bot" value="7"></span>
            </div>
        </div>
        <transition name="bounce">
            <div
                class="row"
                v-if="activation === '6'"
                style="animation-delay: .8s"
            >
                <div class="description">
                    <h2>My Details</h2>
                    <div class="row">
                        <div class="col">
                            <p>
                                Phone Number: +447504855932
                            </p>
                            <p>Address: Bristol, United Kingdom</p>
                        </div>

                        <p class="col">
                            Email: salih_borucu@hotmail.com
                        </p>
                        <div class="col">
                            <a
                                href="https://www.facebook.com/salih.borucu.16"
                                target="_blank"
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
                                href="skype:live:salih.borucu?chat"
                                target="_blank"
                            >
                                <img
                                    class="logo social"
                                    :src="'/img/icons/social/png/006-skype.png'"
                                    alt=""
                                />
                            </a>
                            <a
                                href="https://www.linkedin.com/in/salih-borucu-95a022137/"
                                target="_blank"
                            >
                                <img
                                    class="logo social"
                                    :src="
                                        '/img/icons/social/png/010-linkedin.png'
                                    "
                                    alt=""
                                />
                            </a>
                            <a
                                href="https://github.com/SalihBorucu"
                                target="_blank"
                            >
                                <img
                                    class="logo social"
                                    :src="'/img/social/github.min.svg'"
                                    alt=""
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
        <transition name="bounce">
            <div
                class="row"
                v-if="activation === '6'"
                style="animation-delay: 1s"
            >
                <div class="description">
                    <h2>Send me a message!</h2>
                    <form action="/create" method="POST" @submit="thanks()">
                        <input type="hidden" name="_token" :value="csrf" />
                        <div>
                            <input
                                required
                                name="title"
                                type="text"
                                class="form-input"
                                placeholder="Title of your message"
                            />
                            <textarea
                                required
                                style="resize: none;"
                                name="message"
                                placeholder="Your message here."
                                id=""
                                cols="30"
                                rows="7"
                                class="form-input"
                            ></textarea>
                            <button type="submit" class="form-input">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    props: ["activation"],
    data: () => ({
        csrf: document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content")
    }),
    mounted() {
        console.log("Smallbox6 mounted.");
    },
    methods: {
        thanks() {
            Swal.fire({
                icon: "success",
                title: "Thank you for your message!",
                showConfirmButton: false,
                timer: 10000
            });
        }
    }
};
</script>
