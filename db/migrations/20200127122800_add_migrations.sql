CREATE TABLE schema_migrations (
  migration varchar(255),
  migrated_at time,
  PRIMARY KEY (migration)
);

INSERT INTO schema_migrations (migration, migrated_at)
VALUES ('20170202221740_add_actions.sql',
        '2017-02-02 22:17:40');

INSERT INTO schema_migrations (migration, migrated_at)
VALUES ('20200127122800_add_migrations.sql',
        '2020-01-27 12:28:00');