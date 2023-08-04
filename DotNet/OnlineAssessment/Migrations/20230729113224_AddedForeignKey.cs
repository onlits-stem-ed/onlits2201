using System;
using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace OnlineAssessment.Migrations
{
    /// <inheritdoc />
    public partial class AddedForeignKey : Migration
    {
        /// <inheritdoc />
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn<int>(
                name: "AssessmentId",
                table: "Questions",
                type: "INTEGER",
                nullable: false,
                defaultValue: 0);

            migrationBuilder.AddColumn<int>(
                name: "AssessmentId",
                table: "Candidates",
                type: "INTEGER",
                nullable: false,
                defaultValue: 0);

            migrationBuilder.CreateTable(
                name: "Assessment",
                columns: table => new
                {
                    Id = table.Column<int>(type: "INTEGER", nullable: false)
                        .Annotation("Sqlite:Autoincrement", true),
                    Name = table.Column<string>(type: "TEXT", nullable: false),
                    AssessmentDate = table.Column<DateOnly>(type: "TEXT", nullable: false),
                    AssessmentTime = table.Column<TimeOnly>(type: "TEXT", nullable: false),
                    Duration = table.Column<int>(type: "INTEGER", nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Assessment", x => x.Id);
                });

            migrationBuilder.CreateIndex(
                name: "IX_Questions_AssessmentId",
                table: "Questions",
                column: "AssessmentId");

            migrationBuilder.CreateIndex(
                name: "IX_Candidates_AssessmentId",
                table: "Candidates",
                column: "AssessmentId");

            migrationBuilder.AddForeignKey(
                name: "FK_Candidates_Assessment_AssessmentId",
                table: "Candidates",
                column: "AssessmentId",
                principalTable: "Assessment",
                principalColumn: "Id",
                onDelete: ReferentialAction.Cascade);

            migrationBuilder.AddForeignKey(
                name: "FK_Questions_Assessment_AssessmentId",
                table: "Questions",
                column: "AssessmentId",
                principalTable: "Assessment",
                principalColumn: "Id",
                onDelete: ReferentialAction.Cascade);
        }

        /// <inheritdoc />
        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_Candidates_Assessment_AssessmentId",
                table: "Candidates");

            migrationBuilder.DropForeignKey(
                name: "FK_Questions_Assessment_AssessmentId",
                table: "Questions");

            migrationBuilder.DropTable(
                name: "Assessment");

            migrationBuilder.DropIndex(
                name: "IX_Questions_AssessmentId",
                table: "Questions");

            migrationBuilder.DropIndex(
                name: "IX_Candidates_AssessmentId",
                table: "Candidates");

            migrationBuilder.DropColumn(
                name: "AssessmentId",
                table: "Questions");

            migrationBuilder.DropColumn(
                name: "AssessmentId",
                table: "Candidates");
        }
    }
}
