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
              <h2 class="card-title">{{ "Sales" }}</h2>
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
            :chart-data="salesLineChart.chartData"
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
                {{ "Annual Data" }}
              </h5>
              <h2 class="card-title">{{ "Profit" }}</h2>
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
            :chart-data="profitLineChart.chartData"
            :gradient-colors="profitLineChart.gradientColors"
            :gradient-stops="profitLineChart.gradientStops"
            :extra-options="profitLineChart.extraOptions"
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
              <h2 class="card-title">{{ "Daily Sales" }}</h2>
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
            :chart-data="dailySalesLineChart.chartData"
            :gradient-colors="dailySalesLineChart.gradientColors"
            :gradient-stops="dailySalesLineChart.gradientStops"
            :extra-options="dailySalesLineChart.extraOptions"
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
                <p class="card-category">Profit Today</p>
                <h3 class="card-title">{{ profit_today }}</h3>
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
                <p class="card-category">Profit This Month</p>
                <h3 class="card-title">{{ profit_month }}</h3>
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
                <p class="card-category">Profit This Year</p>
                <h3 class="card-title">{{ profit_year }}</h3>
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
                <p class="card-category">All Time Profit</p>
                <h3 class="card-title">{{ profit_all_time }}</h3>
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
      profit_today: 0,
      profit_month: 0,
      profit_year: 0,
      profit_all_time: 0,
      loaded: false,
      salesLineChart: {
        extraOptions: chartConfigs.salesChartOptions,
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
      },
      profitLineChart: {
        extraOptions: chartConfigs.profitChartOptions,
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
      },
      dailySalesLineChart: {
        extraOptions: chartConfigs.dailySalesChartOptions,
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
        console.log(response.data);
        vm.loaded = true;
        //Sales
        vm.salesLineChart.chartData.datasets[
          "0"
        ].data = response.data.data.sales.flat(1);
        vm.salesLineChart.chartData.labels = response.data.data.labels.flat(1);

        //Daily Sales
        vm.dailySalesLineChart.chartData.datasets[
          "0"
        ].data = response.data.data.dailySales.flat(1);
        vm.dailySalesLineChart.chartData.labels = response.data.data.dailyLabels.flat(
          1
        );

        //Profit
        vm.profitLineChart.chartData.datasets[
          "0"
        ].data = response.data.data.profit.flat(1);
        vm.profitLineChart.chartData.labels = response.data.data.labels.flat(1);

        //Others
        vm.sales_today = vm.numberWithCommas(response.data.data.sales_today);
        vm.sales_month = vm.numberWithCommas(response.data.data.sales_month);
        vm.sales_year = vm.numberWithCommas(response.data.data.sales_year);
        vm.sales_all_time = vm.numberWithCommas(
          response.data.data.sales_all_time
        );

        vm.profit_today = vm.numberWithCommas(response.data.data.profit_today);
        vm.profit_month = vm.numberWithCommas(response.data.data.profit_month);
        vm.profit_year = vm.numberWithCommas(response.data.data.profit_year);
        vm.profit_all_time = vm.numberWithCommas(
          response.data.data.profit_all_time
        );
      });
  }
};
</script>
<style>
</style>
