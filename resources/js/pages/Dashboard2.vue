<template>
  <div class="row">
    <div class="col-12">
      <card type="chart">
        <template slot="header">
          <div class="row">
            <div class="col-sm-6">
              <h5 class="card-category">
                {{ "Annual Sales" }}
              </h5>
              <h2 class="card-title">{{ "Performance" }}</h2>
            </div>
            <div class="col-sm-6"></div>
          </div>
        </template>
        <div class="chart-area">
          <line-chart
            v-if="loaded"
            style="height: 100%"
            ref="bigChart"
            chart-id="big-line-chart"
            :chart-data="purpleLineChart.chartData"
            :gradient-colors="purpleLineChart.gradientColors"
            :gradient-stops="purpleLineChart.gradientStops"
            :extra-options="purpleLineChart.extraOptions"
          >
          </line-chart>
        </div>
      </card>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card card-stats">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="info-icon text-center icon-success">
                <i class="tim-icons icon-money-coins"></i>
              </div>
            </div>
            <div class="col-7">
              <div class="numbers">
                <p class="card-category">Sales Today</p>
                <h3 class="card-title">{{ sales_today }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card card-stats">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="info-icon text-center icon-success">
                <i class="tim-icons icon-money-coins"></i>
              </div>
            </div>
            <div class="col-7">
              <div class="numbers">
                <p class="card-category">Sales This Month</p>
                <h3 class="card-title">{{ sales_month }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card card-stats">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="info-icon text-center icon-success">
                <i class="tim-icons icon-money-coins"></i>
              </div>
            </div>
            <div class="col-7">
              <div class="numbers">
                <p class="card-category">Sales This Year</p>
                <h3 class="card-title">{{ sales_year }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card card-stats">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="info-icon text-center icon-success">
                <i class="tim-icons icon-money-coins"></i>
              </div>
            </div>
            <div class="col-7">
              <div class="numbers">
                <p class="card-category">All Time Sales</p>
                <h3 class="card-title">{{ sales_all_time }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
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
export default {
  components: { LineChart, BarChart, TaskList, UserTable, chartConfigs },
  data() {
    return {
      sales_today: 0,
      sales_month: 0,
      sales_year: 0,
      sales_all_time: 0,
      loaded: false,
      purpleLineChart: {
        extraOptions: chartConfigs.purpleChartOptions,
        chartData: {
          labels: [],
          datasets: [
            {
              label: "Data",
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
              pointRadius: 4,
              data: []
            }
          ]
        }
      }
    };
  },
  computed: {},
  methods: {
    numberWithCommas(x) {
      let a = parseFloat(x);
      return a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
  },
  mounted() {
    let vm = this;
    axios
      .get("http://localhost/odoo_frontend/public/api/v1/xxx")
      .then(function(response) {
        vm.loaded = true;
        vm.purpleLineChart.chartData.datasets[
          "0"
        ].data = response.data.data.stats.flat(1);
        vm.purpleLineChart.chartData.labels = response.data.data.labels.flat(1);
        vm.sales_today = vm.numberWithCommas(response.data.data.sales_today);
        vm.sales_month = vm.numberWithCommas(response.data.data.sales_month);
        vm.sales_year = vm.numberWithCommas(response.data.data.sales_year);
        vm.sales_all_time = vm.numberWithCommas(
          response.data.data.sales_all_time
        );
      });
  }
};
</script>
<style>
</style>
