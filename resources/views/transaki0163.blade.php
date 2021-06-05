<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Vue Material - How can I clear SelectedRows in a table? #116</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons'>
<link rel='stylesheet prefetch' href='https://unpkg.com/vue-material@1.0.0-beta-8/dist/vue-material.min.css'>
<link rel='stylesheet prefetch' href='https://unpkg.com/vue-material@1.0.0-beta-8/dist/theme/default.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div id="app">

  <div>
    <md-table v-model="people" md-card :md-selected-value.sync="selected">
      <md-table-toolbar>
        <h1 class="md-title">With auto select and alternate headers</h1>
      </md-table-toolbar>

      <md-table-toolbar slot="md-table-alternate-header" slot-scope="{ count }">
        <div class="md-toolbar-section-start">{{ getAlternateLabel(count) }}</div>

        <div class="md-toolbar-section-end">
          <md-button class="md-icon-button">
            <md-icon>delete</md-icon>
          </md-button>
        </div>
      </md-table-toolbar>

      <md-table-row slot="md-table-row" slot-scope="{ item }" :md-disabled="item.name.includes('Stave')" md-selectable="multiple" md-auto-select>
        <md-table-cell md-label="Name" md-sort-by="name">{{ item.name }}</md-table-cell>
        <md-table-cell md-label="Email" md-sort-by="email">{{ item.email }}</md-table-cell>
        <md-table-cell md-label="Gender" md-sort-by="gender">{{ item.gender }}</md-table-cell>
        <md-table-cell md-label="Job Title" md-sort-by="title">{{ item.title }}</md-table-cell>
      </md-table-row>
    </md-table>
    
    <md-button class="md-primary md-raised" @click="selected = []">Clear</md-button>

    <p>Selected:</p>
    {{ selected }}
  </div>

</div>
  <script src='https://unpkg.com/vue@2.5.13/dist/vue.min.js'></script>
<script src='https://unpkg.com/vue-material@1.0.0-beta-8/dist/vue-material.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>