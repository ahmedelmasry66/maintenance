<?php

/*
 * Default Permissions configuration file.
 *
 * This file is used to seed group permissions when Maintenance is first installed.
 */
return [
    /*
     * Client Permissions
     */
    'clients' => [
        'maintenance.client.work-requests.index'   => true,
        'maintenance.client.work-requests.create'  => true,
        'maintenance.client.work-requests.store'   => true,
        'maintenance.client.work-requests.show'    => true,
        'maintenance.client.work-requests.edit'    => true,
        'maintenance.client.work-requests.update'  => true,
        'maintenance.client.work-requests.destroy' => true,

        'maintenance.client.work-requests.updates.store'   => true,
        'maintenance.client.work-requests.updates.destroy' => true,
    ],

    /*
     * Worker permissions
     */
    'workers' => [

    ],

    /*
     * Default Administrator Permissions
     */
    'administrators' => [
        'maintenance.welcome.index'                                    => true,
        'maintenance.login'                                            => true,
        'maintenance.login.forgot-password'                            => true,
        'maintenance.login.reset-password'                             => true,
        'maintenance.logout'                                           => true,
        'maintenance.register'                                         => true,
        'maintenance.register.why'                                     => true,
        'maintenance.permission-denied.index'                          => true,
        'maintenance.client.work-requests.index'                       => true,
        'maintenance.client.work-requests.create'                      => true,
        'maintenance.client.work-requests.store'                       => true,
        'maintenance.client.work-requests.show'                        => true,
        'maintenance.client.work-requests.edit'                        => true,
        'maintenance.client.work-requests.update'                      => true,
        'maintenance.client.work-requests.destroy'                     => true,
        'maintenance.client.work-requests.updates.store'               => true,
        'maintenance.client.work-requests.updates.destroy'             => true,
        'maintenance.dashboard.index'                                  => true,
        'maintenance.events.index'                                     => true,
        'maintenance.events.create'                                    => true,
        'maintenance.events.store'                                     => true,
        'maintenance.events.show'                                      => true,
        'maintenance.events.edit'                                      => true,
        'maintenance.events.update'                                    => true,
        'maintenance.events.destroy'                                   => true,
        'maintenance.events.report.store'                              => true,
        'maintenance.events.report.edit'                               => true,
        'maintenance.events.report.update'                             => true,
        'maintenance.events.report.destroy'                            => true,
        'maintenance.work-requests.index'                              => true,
        'maintenance.work-requests.create'                             => true,
        'maintenance.work-requests.store'                              => true,
        'maintenance.work-requests.show'                               => true,
        'maintenance.work-requests.edit'                               => true,
        'maintenance.work-requests.update'                             => true,
        'maintenance.work-requests.destroy'                            => true,
        'maintenance.work-requests.updates.store'                      => true,
        'maintenance.work-requests.updates.destroy'                    => true,
        'maintenance.work-orders.assigned.index'                       => true,
        'maintenance.work-orders.priorities.index'                     => true,
        'maintenance.work-orders.priorities.create'                    => true,
        'maintenance.work-orders.priorities.store'                     => true,
        'maintenance.work-orders.priorities.edit'                      => true,
        'maintenance.work-orders.priorities.update'                    => true,
        'maintenance.work-orders.priorities.destroy'                   => true,
        'maintenance.work-orders.statuses.index'                       => true,
        'maintenance.work-orders.statuses.create'                      => true,
        'maintenance.work-orders.statuses.store'                       => true,
        'maintenance.work-orders.statuses.edit'                        => true,
        'maintenance.work-orders.statuses.update'                      => true,
        'maintenance.work-orders.statuses.destroy'                     => true,
        'maintenance.work-orders.categories.nodes.store'               => true,
        'maintenance.work-orders.categories.index'                     => true,
        'maintenance.work-orders.categories.create'                    => true,
        'maintenance.work-orders.categories.store'                     => true,
        'maintenance.work-orders.categories.edit'                      => true,
        'maintenance.work-orders.categories.update'                    => true,
        'maintenance.work-orders.categories.destroy'                   => true,
        'maintenance.work-orders.categories.nodes.create'              => true,
        'maintenance.work-orders.sessions.index'                       => true,
        'maintenance.work-orders.sessions.start'                       => true,
        'maintenance.work-orders.sessions.end'                         => true,
        'maintenance.work-orders.report.create'                        => true,
        'maintenance.work-orders.report.store'                         => true,
        'maintenance.work-orders.report.show'                          => true,
        'maintenance.work-orders.report.edit'                          => true,
        'maintenance.work-orders.report.update'                        => true,
        'maintenance.work-orders.report.destroy'                       => true,
        'maintenance.work-orders.requests.create'                      => true,
        'maintenance.work-orders.requests.store'                       => true,
        'maintenance.work-orders.index'                                => true,
        'maintenance.work-orders.create'                               => true,
        'maintenance.work-orders.store'                                => true,
        'maintenance.work-orders.show'                                 => true,
        'maintenance.work-orders.edit'                                 => true,
        'maintenance.work-orders.update'                               => true,
        'maintenance.work-orders.destroy'                              => true,
        'maintenance.work-orders.updates.store'                        => true,
        'maintenance.work-orders.updates.destroy'                      => true,
        'maintenance.work-orders.assignments.index'                    => true,
        'maintenance.work-orders.assignments.create'                   => true,
        'maintenance.work-orders.assignments.store'                    => true,
        'maintenance.work-orders.assignments.destroy'                  => true,
        'maintenance.work-orders.parts.index'                          => true,
        'maintenance.work-orders.parts.stocks.index'                   => true,
        'maintenance.work-orders.parts.stocks.take'                    => true,
        'maintenance.work-orders.parts.stocks.put'                     => true,
        'maintenance.work-orders.attachments.download'                 => true,
        'maintenance.work-orders.attachments.index'                    => true,
        'maintenance.work-orders.attachments.create'                   => true,
        'maintenance.work-orders.attachments.store'                    => true,
        'maintenance.work-orders.attachments.show'                     => true,
        'maintenance.work-orders.attachments.edit'                     => true,
        'maintenance.work-orders.attachments.update'                   => true,
        'maintenance.work-orders.attachments.destroy'                  => true,
        'maintenance.work-orders.notifications.store'                  => true,
        'maintenance.work-orders.notifications.update'                 => true,
        'maintenance.work-orders.events.index'                         => true,
        'maintenance.work-orders.events.create'                        => true,
        'maintenance.work-orders.events.store'                         => true,
        'maintenance.work-orders.events.show'                          => true,
        'maintenance.work-orders.events.edit'                          => true,
        'maintenance.work-orders.events.update'                        => true,
        'maintenance.work-orders.events.destroy'                       => true,
        'maintenance.assets.categories.json'                           => true,
        'maintenance.assets.categories.nodes.move'                     => true,
        'maintenance.assets.categories.nodes.store'                    => true,
        'maintenance.assets.categories.index'                          => true,
        'maintenance.assets.categories.create'                         => true,
        'maintenance.assets.categories.store'                          => true,
        'maintenance.assets.categories.edit'                           => true,
        'maintenance.assets.categories.update'                         => true,
        'maintenance.assets.categories.destroy'                        => true,
        'maintenance.assets.categories.nodes.create'                   => true,
        'maintenance.assets.images.download'                           => true,
        'maintenance.assets.images.index'                              => true,
        'maintenance.assets.images.create'                             => true,
        'maintenance.assets.images.store'                              => true,
        'maintenance.assets.images.show'                               => true,
        'maintenance.assets.images.edit'                               => true,
        'maintenance.assets.images.update'                             => true,
        'maintenance.assets.images.destroy'                            => true,
        'maintenance.assets.meters.index'                              => true,
        'maintenance.assets.meters.create'                             => true,
        'maintenance.assets.meters.store'                              => true,
        'maintenance.assets.meters.show'                               => true,
        'maintenance.assets.meters.edit'                               => true,
        'maintenance.assets.meters.update'                             => true,
        'maintenance.assets.meters.destroy'                            => true,
        'maintenance.assets.meters.readings.store'                     => true,
        'maintenance.assets.meters.readings.destroy'                   => true,
        'maintenance.assets.manuals.download'                          => true,
        'maintenance.assets.manuals.index'                             => true,
        'maintenance.assets.manuals.create'                            => true,
        'maintenance.assets.manuals.store'                             => true,
        'maintenance.assets.manuals.show'                              => true,
        'maintenance.assets.manuals.edit'                              => true,
        'maintenance.assets.manuals.update'                            => true,
        'maintenance.assets.manuals.destroy'                           => true,
        'maintenance.assets.work-orders.index'                         => true,
        'maintenance.assets.work-orders.attach.index'                  => true,
        'maintenance.assets.work-orders.attach.store'                  => true,
        'maintenance.assets.work-orders.attach.remove'                 => true,
        'maintenance.assets.events.index'                              => true,
        'maintenance.assets.events.create'                             => true,
        'maintenance.assets.events.store'                              => true,
        'maintenance.assets.events.show'                               => true,
        'maintenance.assets.events.edit'                               => true,
        'maintenance.assets.events.update'                             => true,
        'maintenance.assets.events.destroy'                            => true,
        'maintenance.assets.index'                                     => true,
        'maintenance.assets.create'                                    => true,
        'maintenance.assets.store'                                     => true,
        'maintenance.assets.show'                                      => true,
        'maintenance.assets.edit'                                      => true,
        'maintenance.assets.update'                                    => true,
        'maintenance.assets.destroy'                                   => true,
        'maintenance.inventory.categories.json'                        => true,
        'maintenance.inventory.categories.nodes.move'                  => true,
        'maintenance.inventory.categories.nodes.store'                 => true,
        'maintenance.inventory.categories.index'                       => true,
        'maintenance.inventory.categories.create'                      => true,
        'maintenance.inventory.categories.store'                       => true,
        'maintenance.inventory.categories.edit'                        => true,
        'maintenance.inventory.categories.update'                      => true,
        'maintenance.inventory.categories.destroy'                     => true,
        'maintenance.inventory.categories.nodes.create'                => true,
        'maintenance.inventory.sku.regenerate'                         => true,
        'maintenance.inventory.index'                                  => true,
        'maintenance.inventory.create'                                 => true,
        'maintenance.inventory.store'                                  => true,
        'maintenance.inventory.show'                                   => true,
        'maintenance.inventory.edit'                                   => true,
        'maintenance.inventory.update'                                 => true,
        'maintenance.inventory.destroy'                                => true,
        'maintenance.inventory.stocks.index'                           => true,
        'maintenance.inventory.stocks.create'                          => true,
        'maintenance.inventory.stocks.store'                           => true,
        'maintenance.inventory.stocks.show'                            => true,
        'maintenance.inventory.stocks.edit'                            => true,
        'maintenance.inventory.stocks.update'                          => true,
        'maintenance.inventory.stocks.destroy'                         => true,
        'maintenance.inventory.notes.create'                           => true,
        'maintenance.inventory.notes.store'                            => true,
        'maintenance.inventory.notes.show'                             => true,
        'maintenance.inventory.notes.edit'                             => true,
        'maintenance.inventory.notes.update'                           => true,
        'maintenance.inventory.notes.destroy'                          => true,
        'maintenance.inventory.stocks.movements.rollback'              => true,
        'maintenance.inventory.stocks.movements.index'                 => true,
        'maintenance.inventory.stocks.movements.show'                  => true,
        'maintenance.inventory.events.index'                           => true,
        'maintenance.inventory.events.create'                          => true,
        'maintenance.inventory.events.store'                           => true,
        'maintenance.inventory.events.show'                            => true,
        'maintenance.inventory.events.edit'                            => true,
        'maintenance.inventory.events.update'                          => true,
        'maintenance.inventory.events.destroy'                         => true,
        'maintenance.inventory.variants.create'                        => true,
        'maintenance.inventory.variants.store'                         => true,
        'maintenance.attachments.destroy'                              => true,
        'maintenance.attachments.uploaded.destroy'                     => true,
        'maintenance.locations.json'                                   => true,
        'maintenance.locations.nodes.move'                             => true,
        'maintenance.locations.nodes.store'                            => true,
        'maintenance.locations.index'                                  => true,
        'maintenance.locations.create'                                 => true,
        'maintenance.locations.store'                                  => true,
        'maintenance.locations.edit'                                   => true,
        'maintenance.locations.update'                                 => true,
        'maintenance.locations.destroy'                                => true,
        'maintenance.locations.nodes.create'                           => true,
        'maintenance.metrics.index'                                    => true,
        'maintenance.metrics.create'                                   => true,
        'maintenance.metrics.store'                                    => true,
        'maintenance.metrics.show'                                     => true,
        'maintenance.metrics.edit'                                     => true,
        'maintenance.metrics.update'                                   => true,
        'maintenance.metrics.destroy'                                  => true,
        'maintenance.admin.dashboard.index'                            => true,
        'maintenance.admin.logs.mark-read'                             => true,
        'maintenance.admin.logs.index'                                 => true,
        'maintenance.admin.logs.show'                                  => true,
        'maintenance.admin.logs.destroy'                               => true,
        'maintenance.admin.users.index'                                => true,
        'maintenance.admin.users.create'                               => true,
        'maintenance.admin.users.store'                                => true,
        'maintenance.admin.users.show'                                 => true,
        'maintenance.admin.users.edit'                                 => true,
        'maintenance.admin.users.update'                               => true,
        'maintenance.admin.users.destroy'                              => true,
        'maintenance.admin.users.password.update'                      => true,
        'maintenance.admin.users.check-access'                         => true,
        'maintenance.admin.roles.index'                                => true,
        'maintenance.admin.roles.create'                               => true,
        'maintenance.admin.roles.store'                                => true,
        'maintenance.admin.roles.show'                                 => true,
        'maintenance.admin.roles.edit'                                 => true,
        'maintenance.admin.roles.update'                               => true,
        'maintenance.admin.roles.destroy'                              => true,
        'maintenance.admin.archive.assets.restore'                     => true,
        'maintenance.admin.archive.assets.index'                       => true,
        'maintenance.admin.archive.assets.show'                        => true,
        'maintenance.admin.archive.assets.destroy'                     => true,
        'maintenance.admin.archive.work-orders.restore'                => true,
        'maintenance.admin.archive.work-orders.index'                  => true,
        'maintenance.admin.archive.work-orders.show'                   => true,
        'maintenance.admin.archive.work-orders.destroy'                => true,
        'maintenance.admin.archive.inventory.restore'                  => true,
        'maintenance.admin.archive.inventory.index'                    => true,
        'maintenance.admin.archive.inventory.show'                     => true,
        'maintenance.admin.archive.inventory.destroy'                  => true,
        'maintenance.admin.settings.site.index'                        => true,
        'maintenance.admin.settings.site.store'                        => true,
        'maintenance.api.v1.events.between'                            => true,
        'maintenance.api.v1.events.grid'                               => true,
        'maintenance.api.v1.events.move'                               => true,
        'maintenance.api.v1.work-orders.grid'                          => true,
        'maintenance.api.v1.work-orders.assigned.grid'                 => true,
        'maintenance.api.v1.work-orders.statuses.grid'                 => true,
        'maintenance.api.v1.work-orders.priorities.grid'               => true,
        'maintenance.api.v1.work-orders.categories.grid'               => true,
        'maintenance.api.v1.work-orders.categories.move'               => true,
        'maintenance.api.v1.work-orders.events.grid'                   => true,
        'maintenance.api.v1.work-orders.events.between'                => true,
        'maintenance.api.v1.work-orders.parts.grid'                    => true,
        'maintenance.api.v1.work-orders.parts.inventory.grid'          => true,
        'maintenance.api.v1.work-orders.parts.inventory.variants.grid' => true,
        'maintenance.api.v1.work-orders.parts.inventory.stocks.grid'   => true,
        'maintenance.api.v1.work-orders.attachments.grid'              => true,
        'maintenance.api.v1.work-orders.sessions.grid'                 => true,
        'maintenance.api.v1.work-requests.grid'                        => true,
        'maintenance.api.v1.inventory.grid'                            => true,
        'maintenance.api.v1.inventory.events.grid'                     => true,
        'maintenance.api.v1.inventory.events.between'                  => true,
        'maintenance.api.v1.inventory.variants.grid'                   => true,
        'maintenance.api.v1.inventory.stocks.grid'                     => true,
        'maintenance.api.v1.inventory.stocks.movements.grid'           => true,
        'maintenance.api.v1.inventory.stocks.edit'                     => true,
        'maintenance.api.v1.inventory.stocks.update'                   => true,
        'maintenance.api.v1.inventory.categories.grid'                 => true,
        'maintenance.api.v1.inventory.categories.move'                 => true,
        'maintenance.api.v1.assets.grid'                               => true,
        'maintenance.api.v1.assets.categories.grid'                    => true,
        'maintenance.api.v1.assets.categories.move'                    => true,
        'maintenance.api.v1.assets.events.grid'                        => true,
        'maintenance.api.v1.assets.events.between'                     => true,
        'maintenance.api.v1.assets.work-orders.grid'                   => true,
        'maintenance.api.v1.assets.work-orders.attachable.grid'        => true,
        'maintenance.api.v1.assets.manuals.grid'                       => true,
        'maintenance.api.v1.assets.images.grid'                        => true,
        'maintenance.api.v1.assets.meters.grid'                        => true,
        'maintenance.api.v1.assets.meters.readings.grid'               => true,
        'maintenance.api.v1.locations.grid'                            => true,
        'maintenance.api.v1.locations.move'                            => true,
        'maintenance.api.v1.metrics.grid'                              => true,
        'maintenance.api.v1.admin.users.grid'                          => true,
        'maintenance.api.v1.admin.roles.grid'                          => true,
        'maintenance.api.v1.admin.archive.work-orders.grid'            => true,
        'maintenance.api.v1.admin.archive.inventory.grid'              => true,
        'maintenance.api.v1.client.work-requests.grid'                 => true,
    ],

];
