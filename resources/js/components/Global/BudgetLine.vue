<template>
  <div>
    <div v-for="(budgetLine, index) in budgetLines" :key="index">
      <div class="form-group">
        <label class="form-control-label" for="input-role"
          >Account to <slot></slot
        ></label>
        <select
          class="form-control"
          v-model="budgetLine.account_id"
          @change="updatebudgetLines(index)"
          required
        >
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
          v-model="budgetLine.amount"
          @change="updatebudgetLines(index)"
          required
        />
      </div>
      <div class="form-group">
        <label class="form-control-label" for="input-budget">Budget Left</label>
        <input
          class="form-control"
          type="Number"
          v-model="budgetLine.diff"
          @change="updatebudgetLines(index)"
          disabled
        />
      </div>
      <hr />
    </div>

    <div class="row">
      <div class="col text-center">
        <button type="button" class="btn" @click="addBudgetLine">
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
  data: function() {
    return {};
  },
  props: {
    name: String,
    budgetLineType: String,
    value: String
  },
  computed: {
    accounts() {
      if (this.budgetLineType == "debit") {
        return this.$store.getters.getDebitAccounts;
      }
      if (this.budgetLineType == "credit") {
        return this.$store.getters.getCreditAccounts;
      }
    },
    budgetLines() {
      return this.$store.getters.getBudgetLines(this.budgetLineType);
    },
    inputName() {
      return "input-" + name;
    },
    budgetLinesLoadStatus() {
      return this.$store.getters.budgetLinesLoadStatus();
    },
    budgetLineTotal() {
      return this.$store.getters.getBudgetLineTotal(this.budgetLineType);
    }
  },
  methods: {
    addBudgetLine() {
      let pl = {
        account_id: 0,
        amount: 0,
        budget: 0,
        diff: 0
      };
      let data = {
        type: this.budgetLineType,
        data: pl
      };
      this.$store.dispatch("addBudgetLine", data);
    },
    updatebudgetLines(index) {
      let data = {
        type: this.budgetLineType,
        data: this.budgetLines,
        index: index
      };
      this.$store.dispatch("updateBudgetLines", data);
    }
  },
  watch: {}
};
</script>

<style lang="scss" scoped>
</style>