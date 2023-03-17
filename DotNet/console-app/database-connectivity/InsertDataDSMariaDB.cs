using MySql.Data.MySqlClient;
using System.Data;

public class InsertDataDSMariaDB
{
    public void SetData(string name)
    {
        string connectionString = "server=localhost; uid=onlits2201; pwd=onlits2201; database=crud_test_2201";
        MySqlConnection connection = new MySqlConnection();
        MySqlCommand command = new MySqlCommand();
        MySqlDataAdapter dataAdapter = new MySqlDataAdapter();
        DataSet dataSet = new DataSet();
        DataRow dataRow;
        MySqlCommandBuilder commandBuilder = new MySqlCommandBuilder();
        connection.ConnectionString = connectionString;
        connection.Open();
        command.CommandText = "SELECT * FROM student";
        command.Connection = connection;
        dataAdapter.SelectCommand = command;
        dataAdapter.Fill(dataSet, "student");
        dataRow = dataSet.Tables[0].NewRow();
        dataRow["name"] = name;
        dataSet.Tables[0].Rows.Add(dataRow);
        commandBuilder.DataAdapter = dataAdapter;
        dataAdapter.Update(dataSet, "student");
        Console.WriteLine("Data Inserted Successfully!");
        connection.Close();
    }
}