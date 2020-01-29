<template>
    <div @keyup.enter="cancel()">
        <div class="nav-box" v-on:click="something($event)">
            <small-box1
                @nextPage="changePage"
                :activation="activation"
                value="1"
                :class="{
                    inactive:
                        activation == '2' ||
                        activation == '3' ||
                        activation == '4' ||
                        activation == '5' ||
                        activation == '6'
                }"
            ></small-box1>
            <small-box2
                @nextPage="changePage"
                :activation="activation"
                value="2"
                :class="{
                    inactive:
                        activation == '1' ||
                        activation == '3' ||
                        activation == '4' ||
                        activation == '5' ||
                        activation == '6'
                }"
            ></small-box2>
            <small-box3
                :activation="activation"
                @nextPage="changePage"
                value="3"
                :class="{
                    inactive:
                        activation == '1' ||
                        activation == '2' ||
                        activation == '4' ||
                        activation == '5' ||
                        activation == '6'
                }"
            ></small-box3>
            <small-box4
                :activation="activation"
                @nextPage="changePage"
                value="4"
                :class="{
                    inactive:
                        activation == '1' ||
                        activation == '2' ||
                        activation == '3' ||
                        activation == '5' ||
                        activation == '6'
                }"
            ></small-box4>
            <small-box5
                :activation="activation"
                @nextPage="changePage"
                value="5"
                :class="{
                    inactive:
                        activation == '1' ||
                        activation == '2' ||
                        activation == '3' ||
                        activation == '4' ||
                        activation == '6'
                }"
            ></small-box5>
            <small-box6
                :activation="activation"
                value="6"
                :class="{
                    inactive:
                        activation == '1' ||
                        activation == '2' ||
                        activation == '3' ||
                        activation == '4' ||
                        activation == '5'
                }"
            ></small-box6>
            <div></div>
            <!-- <div>
            Icons made by
            <a href="https://www.flaticon.com/authors/freepik" title="Freepik"
                >Freepik</a
            >
            from
            <a href="https://www.flaticon.com/" title="Flaticon"
                >www.flaticon.com</a
            > -->
        </div>
    </div>
</template>

<script>
export default {
    mounted() {},
    data() {
        return {
            activation: 7
        };
    },
    created: function() {
        // window.addEventListener("keyup", this.cancel);
        window.addEventListener("keydown", event => {
            if (event.key === "Escape") {
                this.activation = 7;
            }
        });
    },
    methods: {
        something($event) {
            var selectedValue = $event.target.getAttribute("value");
            if (selectedValue !== null) {
                // console.log(selectedValue);
                this.activation = selectedValue;
                // if (selectedValue === "null") {
                //     this.activation = null;
                // }
            } else {
                // console.log("nope");
            }
        },
        cancel() {},
        changePage(value) {
            var newPage = parseInt(this.activation, 10) + 1;
            this.activation = newPage.toString();
        }
    }
};
</script>
