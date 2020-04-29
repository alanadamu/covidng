<template>
  <div class="row">
    <div class="col-12">
      <card type="chart">
        <template slot="header">
          <div class="row">
            <div class="col-sm-6">
              <h5 class="card-category">
                {{ "Annual Data" }}
              </h5>
              <h2 class="card-title">{{ "Cases" }}</h2>
            </div>
            <div class="col-sm-6"></div>
          </div>
        </template>
        <div class="chart-area">
          <line-chart
            v-if="salesLineChartLoadStatus"
            style="height: 100%"
            ref="bigChart"
            chart-id="big-line-chart"
            :chartData="salesLineChart.chartData"
            :gradient-colors="salesLineChart.gradientColors"
            :gradient-stops="salesLineChart.gradientStops"
            :extra-options="salesLineChart.extraOptions"
          >
          </line-chart>
        </div>
      </card>

      <card type="chart">
        <template slot="header">
          <div class="row">
            <div class="col-sm-6">
              <h5 class="card-category">
                {{ "Monthly Data" }}
              </h5>
              <h2 class="card-title">{{ "Daily Cases" }}</h2>
            </div>
            <div class="col-sm-6"></div>
          </div>
        </template>
        <div class="chart-area">
          <line-chart
            v-if="dailySalesLineChartLoadStatus"
            style="height: 100%"
            ref="bigChart"
            chart-id="big-line-chart"
            :chartData="dailySalesLineChart.chartData"
            :gradient-colors="dailySalesLineChart.gradientColors"
            :gradient-stops="dailySalesLineChart.gradientStops"
            :extra-options="dailySalesLineChart.extraOptions"
          >
          </line-chart>
        </div>
      </card>
      <card type="chart">
        <template slot="header">
          <div class="row">
            <div class="col-sm-6">
              <h5 class="card-category">
                {{ "Annual Data" }}
              </h5>
              <h2 class="card-title">{{ "Compare States" }}</h2>
            </div>
            <div class="col-sm-3 my-1">
              <!-- array of strings or numbers -->
              <v-select
                placeholder="Choose a State"
                label="name"
                :options="states"
                v-model="selectedState['0']"
                @input="updateStateChart('0')"
              ></v-select>
            </div>
            <div class="col-sm-3 my-1">
              <!-- array of strings or numbers -->
              <v-select
                placeholder="Choose a State"
                label="name"
                :options="states"
                v-model="selectedState['1']"
                @input="updateStateChart('1')"
              ></v-select>
            </div>
          </div>
        </template>
        <div class="chart-area">
          <line-chart
            v-if="stateCasesLineChartLoadStatus"
            style="height: 100%"
            ref="bigChart"
            chart-id="big-line-chart"
            :chartData="stateCasesLineChart.chartData"
            :gradient-colors="stateCasesLineChart.gradientColors"
            :gradient-stops="stateCasesLineChart.gradientStops"
            :extra-options="stateCasesLineChart.extraOptions"
          >
          </line-chart>
        </div>
      </card>
    </div>
  </div>
</template>
<script>
import LineChart from "../components/Charts/LineChart";
import BarChart from "../components/Charts/BarChart";
import * as chartConfigs from "../components/Charts/config";
import TaskList from "./Dashboard/TaskList";
import UserTable from "./Dashboard/UserTable";
import config from "../config";
import axios from "axios";
import { APP_CONFIG } from "../app_config.js";

export default {
  components: { LineChart, BarChart, TaskList, UserTable, chartConfigs },
  data: function() {
    return {
      dateLabels: {},
      selectedState: {
        "0": "",
        "1": ""
      },
      stateCases: [],
      states: [],
      sales_today: 0,
      sales_month: 0,
      sales_year: 0,
      sales_all_time: 0,
      profit_today: 0,
      profit_month: 0,
      profit_year: 0,
      profit_all_time: 0,
      salesLineChartLoadStatus: 0,
      dailySalesLineChartLoadStatus: 0,
      stateCasesLineChartLoadStatus: 0,
      salesLineChart: {
        extraOptions: chartConfigs.salesChartOptions,
        chartData: {
          labels: [],
          datasets: [
            {
              label: "Cases",
              fill: true,
              borderColor: config.colors.primary,
              borderWidth: 2,
              borderDash: [],
              borderDashOffset: 0.0,
              backgroundColor: "#36A2EB",
              borderColor: "#36A2EB",
              backgroundColor: config.colors.primary,
              pointBackgroundColor: config.colors.primary,
              pointBorderColor: "rgba(255,255,255,0)",
              pointHoverBackgroundColor: config.colors.primary,
              pointBorderWidth: 20,
              pointHoverRadius: 4,
              pointHoverBorderWidth: 15,
              pointRadius: 0,
              data: []
            },
            {
              label: "Recoveries",
              fill: true,
              borderColor: config.colors.primary,
              borderWidth: 2,
              borderDash: [],
              borderDashOffset: 0.0,
              pointBackgroundColor: config.colors.primary,
              pointBorderColor: "rgba(255,255,255,0)",
              pointHoverBackgroundColor: config.colors.primary,
              pointBorderWidth: 20,
              pointHoverRadius: 4,
              pointHoverBorderWidth: 15,
              pointRadius: 0,
              data: []
            },
            {
              label: "Deaths",
              fill: true,
              borderWidth: 2,
              borderDash: [],
              borderDashOffset: 0.0,
              backgroundColor: "rgb(255, 99, 132)",
              borderColor: "rgb(255, 99, 132)",
              pointBackgroundColor: config.colors.primary,
              pointBorderColor: "rgba(255,255,255,0)",
              pointHoverBackgroundColor: config.colors.primary,
              pointBorderWidth: 20,
              pointHoverRadius: 4,
              pointHoverBorderWidth: 15,
              pointRadius: 0,
              data: []
            }
          ]
        }
      },
      profitLineChart: {
        extraOptions: chartConfigs.profitChartOptions,
        chartData: {
          labels: [],
          datasets: []
        }
      },
      dailySalesLineChart: {
        extraOptions: chartConfigs.dailySalesChartOptions,
        chartData: {
          labels: [],
          datasets: [
            {
              label: "Daily Cases",
              fill: true,
              borderColor: config.colors.primary,
              borderWidth: 2,
              borderDash: [],
              borderDashOffset: 0.0,
              pointBackgroundColor: config.colors.primary,
              pointBorderColor: "rgba(255,255,255,0)",
              pointHoverBackgroundColor: config.colors.primary,
              pointBorderWidth: 20,
              pointHoverRadius: 4,
              pointHoverBorderWidth: 15,
              pointRadius: 0,
              data: []
            }
          ]
        }
      }
    };
  },
  computed: {
    stateCasesLineChart() {
      this.stateCasesLineChartLoadStatus = 1;
      return this.profitLineChart;
    }
  },
  watch: {
    salesLineChartLoadStatus: function(val) {
      if (val == 1) {
      }
    },
    dailySalesLineChartLoadStatus: function(val) {
      if (val == 1) {
      }
    },
    stateCasesLineChartLoadStatus: function(val) {
      if (val == 1) {
      }
    }
  },
  methods: {
    updateStatsData(response) {
      this.dailySalesLineChart.chartData.datasets["0"].data =
        response.data.data.dailyCases;
      this.dailySalesLineChart.chartData.labels =
        response.data.data.dailyLabels;
      this.dailySalesLineChartLoadStatus = 1;

      this.salesLineChart.chartData.datasets["0"].data =
        response.data.data.cases;
      this.salesLineChart.chartData.datasets["1"].data =
        response.data.data.recoveries;
      this.salesLineChart.chartData.datasets["2"].data =
        response.data.data.deaths;
      this.salesLineChart.chartData.labels = response.data.data.labels;
      this.salesLineChartLoadStatus = 1;

      this.stateCases = response.data.data.dailyStateCases;
      this.dateLabels = response.data.data.dateLabels["0"].map(a => a.date);
      this.stateCasesLineChartLoadStatus = 1;

      return new Promise(function(resolve, reject) {
        resolve("data updated successfully");
      });
    },
    numberWithCommas(x) {
      let a = parseFloat(x);
      return a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    },
    updateStateChart(key) {
      let state_id = 0;
      let data = [];
      var result = {};
      let data2 = [];
      var result2 = {};
      let dataset = [];

      let key2 = key => {
        return key == 0 ? 1 : 0;
      };

      let data_exists = key => {
        if (!this.selectedState[parseInt(key)]) {
          return false;
        }
        return Object.entries(this.selectedState[parseInt(key)]).length !== 0;
      };
      if (data_exists(key2(key)) && data_exists(key)) {
        // Get chart data
        // Get the data of the state
        state_id = this.selectedState[key].id;
        result = this.stateCases["0"].filter(obj => {
          return obj.id === state_id;
        });

        data = result[0].covid_cases.map(a => ({
          x: a.date,
          y: a.state_sum_value
        }));

        let state_id2 = this.selectedState[key2(key)].id;
        var result2 = this.stateCases["0"].filter(obj => {
          return obj.id === state_id2;
        });
        let data2 = result2[0].covid_cases.map(a => ({
          x: a.date,
          y: a.state_sum_value
        }));

        let firstData = [];
        let secondData = [];
        if (key == 0) {
          firstData = data;
          secondData = data2;
        } else {
          firstData = data2;
          secondData = data;
        }
        dataset = [
          {
            label: this.selectedState[0].name,
            fill: false,
            borderColor: config.colors.primary,
            borderWidth: 2,
            borderDash: [],
            borderDashOffset: 0.0,
            pointBackgroundColor: config.colors.primary,
            pointBorderColor: "rgba(255,255,255,0)",
            pointHoverBackgroundColor: config.colors.primary,
            pointBorderWidth: 20,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 15,
            pointRadius: 0,
            yAxisID: "y-axis-1",
            data: firstData
          },
          {
            label: this.selectedState[1].name,
            borderColor: config.colors.primary,
            borderWidth: 2,
            borderDash: [],
            borderDashOffset: 0.0,
            pointBackgroundColor: "rgb(255, 99, 132)",
            backgroundColor: "rgb(255, 99, 132)",
            borderColor: "rgb(255, 99, 132)",
            pointBorderColor: "rgba(255,255,255,0)",
            fill: false,
            pointHoverBackgroundColor: config.colors.primary,
            pointBorderWidth: 20,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 15,
            pointRadius: 0,
            yAxisID: "y-axis-1",
            data: secondData
          }
        ];

        this.profitLineChart = {
          extraOptions: chartConfigs.profitChartOptions,
          chartData: {
            labels: this.dateLabels,
            datasets: dataset
          }
        };
      } else if (data_exists(key2(key)) && !data_exists(key)) {
        state_id = this.selectedState[key2(key)].id;
        // Get the data of the state
        result = this.stateCases["0"].filter(obj => {
          return obj.id === state_id;
        });

        data = result[0].covid_cases.map(a => ({
          x: a.date,
          y: a.state_sum_value
        }));
        dataset = [
          {
            label: this.selectedState[key2(key)].name,
            fill: false,
            borderColor: "rgb(255, 99, 132)",
            borderWidth: 2,
            borderDash: [],
            borderDashOffset: 0.0,
            pointBackgroundColor: "rgb(255, 99, 132)",
            backgroundColor: "rgb(255, 99, 132)",
            borderColor: "rgb(255, 99, 132)",
            pointHoverBackgroundColor: "rgb(255, 99, 132)",
            pointBorderWidth: 20,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 15,
            pointRadius: 0,
            yAxisID: "y-axis-1",
            data: data
          }
        ];

        this.profitLineChart = {
          extraOptions: chartConfigs.profitChartOptions,
          chartData: {
            labels: this.dateLabels,
            datasets: dataset
          }
        };
      } else if (!data_exists(key2(key)) && data_exists(key)) {
        state_id = this.selectedState[key].id;
        // Get the data of the state
        result = this.stateCases["0"].filter(obj => {
          return obj.id === state_id;
        });

        data = result[0].covid_cases.map(a => ({
          x: a.date,
          y: a.state_sum_value
        }));
        dataset = [
          {
            label: this.selectedState[key].name,
            fill: true,
            borderColor: config.colors.primary,
            borderWidth: 2,
            borderDash: [],
            borderDashOffset: 0.0,
            pointBackgroundColor: config.colors.primary,
            pointBorderColor: "rgba(255,255,255,0)",
            pointHoverBackgroundColor: config.colors.primary,
            pointBorderWidth: 20,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 15,
            pointRadius: 0,
            yAxisID: "y-axis-1",
            data: data
          }
        ];

        this.profitLineChart = {
          extraOptions: chartConfigs.profitChartOptions,
          chartData: {
            labels: this.dateLabels,
            datasets: dataset
          }
        };
      } else {
        dataset = [{}];

        this.profitLineChart = {
          extraOptions: chartConfigs.profitChartOptions,
          chartData: {
            labels: this.dateLabels,
            datasets: dataset
          }
        };
      }

      // Create Chart Data
      //Set Chart Data

      // this.profitLineChart.chartData.datasets["0"].data = data;
      // this.profitLineChart.chartData.labels = labels;
    }
  },
  mounted: function() {
    let vm = this;
    axios.get(APP_CONFIG.API_URL + "/home").then(function(response) {
      vm.updateStatsData(response).then(function(response) {});
    });

    axios.get(APP_CONFIG.API_URL + "/state").then(function(response) {
      vm.states = response.data.data;
    });
  }
};
</script>
<style>
.v-select .vs__search::placeholder,
.v-select .vs__search:focus,
.v-select .vs__selected {
  color: rgb(240, 240, 240);
}
</style>