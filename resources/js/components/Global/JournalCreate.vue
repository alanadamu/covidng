<template>
  <div>
    <div class="row">
      <div class="col-xl-12 order-xl-1">
        <div class="row sticky-top">
          <div class="col-lg-6">
            <stat-card bgcolor="bg-gradient-info" :value="journalLineTotalDebit"
              >Total DR</stat-card
            >
          </div>
          <div class="col-lg-6">
            <stat-card
              bgcolor="bg-gradient-danger"
              :value="journalLineTotalCredit"
              >Total CR</stat-card
            >
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-transparent">
                <h3 class="mb-0">Debit Accounts</h3>
              </div>
              <div class="card-body">
                <journal-lines journalLineType="debit">Debit</journal-lines>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-transparent">
                <h3 class="mb-0">Credit Accounts</h3>
              </div>
              <div class="card-body">
                <journal-lines journalLineType="credit">Credit</journal-lines>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-date">Date</label>
          <input
            type="Date"
            class="form-control"
            v-model="journalLines.date"
            @change="updateJournalLines"
            required
          />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-reference"
            >Reference</label
          >
          <input
            type="text"
            class="form-control"
            v-model="journalLines.reference"
            @change="updateJournalLines"
            required
          />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <button
          type="button"
          class="btn btn-success"
          @click="submitEntries"
          :disabled="validateEntries"
        >
          Submit
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      journalLines: {
        date: "",
        reference: ""
      }
    };
  },
  methods: {
    submitEntries() {
      this.$store.dispatch("saveJournalEntries", this.postData);
    },
    updateJournalLines() {
      let data = {
        type: "date",
        data: this.journalLines.date
      };
      this.$store.dispatch("updateJournalLines", data);
      data = {
        type: "reference",
        data: this.journalLines.reference
      };
      this.$store.dispatch("updateJournalLines", data);
    },
    formatNumber(value) {
      let val = (value / 1).toFixed(2).replace(",", ".");
      return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
  },
  computed: {
    saveJournalEntriesLoadStatus() {
      return this.$store.getters.saveJournalEntriesLoadStatus();
    },
    postData() {
      return this.$store.getters.getJournalLinesAll();
    },
    validateEntries() {
      if (
        parseFloat(this.journalLineTotalDebit) +
          parseFloat(this.journalLineTotalCredit) ==
        0
      ) {
        return true;
      } else if (this.journalLineTotalDebit != this.journalLineTotalCredit) {
        return true;
      } else {
        return false;
      }
    },
    journalLineTotalDebit() {
      return this.formatNumber(
        this.$store.getters.getJournalLineTotal("debit")
      );
    },
    journalLineTotalCredit() {
      return this.formatNumber(
        this.$store.getters.getJournalLineTotal("credit")
      );
    }
  },
  watch: {
    saveJournalEntriesLoadStatus: function(val) {
      if (val == 2) {
        console.log("success");
      }
    }
  },
  created() {
    this.$store.dispatch("getAccounts", { url: null });
  }
};
</script>

<style lang="scss" scoped>
</style>