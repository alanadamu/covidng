<template>
  <div>
    <div v-for="(journalLine, index) in journalLines" :key="index">
      <div class="form-group">
        <label class="form-control-label" for="input-role"
          >Account to <slot></slot
        ></label>
        <select
          class="form-control selectpicker"
          v-model="journalLine.account_id"
          @change="updateJournalLines"
          required
        >
          <option value="">--</option>
          <option
            :value="account.id"
            v-for="account in accounts"
            :key="account.id"
            >{{ account.name }}</option
          >
        </select>
      </div>
      <div class="form-group">
        <label class="form-control-label" for="input-email">Amount</label>
        <input
          class="form-control"
          type="Number"
          v-model="journalLine.amount"
          @change="updateJournalLines"
          required
        />
      </div>
      <hr />
    </div>

    <div class="row">
      <div class="col text-center">
        <button type="button" class="btn" @click="addJournalLine">
          <div>
            <i class="ni ni-fat-add"></i>
            <span>Add new line</span>
          </div>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  props: {
    name: String,
    journalLineType: String,
    value: String
  },
  computed: {
    accounts() {
      return this.$store.getters.getAccounts;
    },
    journalLines() {
      return this.$store.getters.getJournalLines(this.journalLineType);
    },
    inputName() {
      return "input-" + name;
    },
    journalLinesLoadStatus() {
      return this.$store.getters.journalLinesLoadStatus();
    },
    journalLineTotal() {
      return this.$store.getters.getJournalLineTotal(this.journalLineType);
    }
  },
  methods: {
    addJournalLine() {
      let pl = {
        account_id: 0,
        amount: 0
      };
      let data = {
        type: this.journalLineType,
        data: pl
      };
      this.$store.dispatch("addJournalLine", data);
    },
    updateJournalLines() {
      let data = {
        type: this.journalLineType,
        data: this.journalLines
      };
      this.$store.dispatch("updateJournalLines", data);
    }
  },
  watch: {}
};
</script>

<style lang="scss" scoped>
</style>